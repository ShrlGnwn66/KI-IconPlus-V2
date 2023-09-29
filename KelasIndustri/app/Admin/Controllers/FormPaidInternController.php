<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\FormPaidIntern;
use Psy\VersionUpdater\Downloader;

class FormPaidInternController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'FormPaidIntern';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new FormPaidIntern());

        $grid->column('id', __('Id'));
        $grid->column('agency_name', __('Agency name'));
        $grid->column('participant_name', __('Participant name'));
        $grid->column('department', __('Department'));
        $grid->column('graduation_year', __('Graduation year'));
        $grid->column('laptop_device', __('Laptop device'))->bool(['1' => true, '0' => false]);
        $grid->column('driver_license', __('Driver license'))->bool(['1' => true, '0' => false]);
        $grid->column('apply_letter', __('Apply letter'))->downloadable();
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(FormPaidIntern::findOrFail($id));
        $server = public_path('uploads/files/');

        $show->field('id', __('Id'));
        $show->field('agency_name', __('Agency name'));
        $show->field('participant_name', __('Participant name'));
        $show->field('department', __('Department'));
        $show->field('graduation_year', __('Graduation year'));
        $show->field('laptop_device', __('Laptop device'))->using(['1' => 'Ya', '0' => 'Tidak']);
        $show->field('driver_license', __('Driver license'))->using(['1' => 'Ya', '0' => 'Tidak']);
        $show->field('apply_letter', __('Apply letter'))->file();
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new FormPaidIntern());

        $form->text('agency_name', __('Agency name'));
        $form->text('participant_name', __('Participant name'));
        $form->select('department', __('Department'))->options([
            'DKV' => 'DKV',
            'TITL' => 'TITL',
            'TJKT' => 'TJKT',
            'RPL' => 'RPL',
        ]);
        $form->number('graduation_year', __('Graduation year'));
        $form->radio('laptop_device', __('Laptop device'))->options(['1' => 'IYA', '0' => 'TIDAK'])->default('');
        $form->radio('driver_license', __('Driver license'))->options(['1' => 'IYA', '0' => 'TIDAK'])->default('');
        $form->file('apply_letter', __('Apply letter'));

        return $form;
    }
}

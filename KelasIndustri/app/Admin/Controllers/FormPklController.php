<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\FormPkl;
use PhpOption\Option;

class FormPklController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'FormPkl';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new FormPkl());

        $grid->column('id', __('Id'));
        $grid->column('participant_name', __('Participant name'));
        $grid->column('gender', __('Gender'));
        $grid->column('department', __('Department'));
        $grid->column('nis_nim', __('Nis nim'));
        $grid->column('agency_name', __('Agency name'));
        $grid->column('placement', __('Placement'));
        $grid->column('start_intern_period', __('start_Intern period'));
        $grid->column('end_intern_period', __('end_Intern period'));
        $grid->column('responsible_teacher', __('Responsible teacher'));
        $grid->column('responsible_contact', __('Responsible contact'));
        $grid->column('apply_letter', __('Apply letter'))->bool();
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
        $show = new Show(FormPkl::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('participant_name', __('Participant name'));
        $show->field('gender', __('Gender'));
        $show->field('department', __('Department'));
        $show->field('nis_nim', __('Nis nim'));
        $show->field('agency_name', __('Agency name'));
        $show->field('placement', __('Placement'));
        $show->field('start_intern_period', __('start_Intern period'));
        $show->field('end_intern_period', __('end_Intern period'));
        $show->field('responsible_teacher', __('Responsible teacher'));
        $show->field('responsible_contact', __('Responsible contact'));
        $show->field('apply_letter', __('Apply letter'))->file();
        $show->field('created_at', __('Created at'));
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
        $form = new Form(new FormPkl());

        $form->text('participant_name', __('Participant name'));
        $form->radio('gender', __('Gender'))->options(['1' => 'Laki-Laki' , '2' => 'Perempuan']);
        $form->select('department', __('Department'))->options([
            'DKV' => 'DKV',
            'TITL' => 'TITL',
            'TJKT' => 'TJKT',
            'RPL' => 'RPL',
        ]);
        $form->text('nis_nim', __('Nis nim'));
        $form->text('agency_name', __('Agency name'));
        $form->select('placement', __('Placement'))->options([
            'A' => 'A',
            'B' => 'B',
            'C' => 'C',
            'D' => 'D',
        ]);
        $form->dateRange('start_intern_period','end_intern_period', __('Intern Periode'));
        $form->text('responsible_teacher', __('Responsible teacher'));
        $form->text('responsible_contact', __('Responsible contact'));
        $form->file('apply_letter', __('Apply letter'));



        return $form;
    }
}

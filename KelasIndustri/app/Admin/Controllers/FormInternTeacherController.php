<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\FormInternTeacher;

class FormInternTeacherController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'FormInternTeacher';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new FormInternTeacher());

        $grid->column('id', __('Id'));
        $grid->column('agency_name', __('Agency name'));
        $grid->column('participant_name', __('Participant name'));
        $grid->column('nip', __('Nip'));
        $grid->column('gender', __('Gender'))->using(['1' => 'Laki-Laki', '0' => 'Permpuan']);
        $grid->column('department', __('Department'));
        $grid->column('start_intern_period', __('start intern period'));
        $grid->column('end_intern_period', __('end intern period'));
        $grid->column('responsible_teacher', __('Responsible teacher'));
        $grid->column('responsible_contact', __('Responsible contact'));
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
        $show = new Show(FormInternTeacher::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('agency_name', __('Agency name'));
        $show->field('participant_name', __('Participant name'));
        $show->field('nip', __('Nip'));
        $show->field('gender', __('Gender'));
        $show->field('department', __('Department'));
        $show->field('start_intern_period', __('Start intern period'));
        $show->field('end_intern_period', __('End intern period'));
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
        $form = new Form(new FormInternTeacher());

        $form->text('agency_name', __('Agency name'));
        $form->text('participant_name', __('Participant name'));
        $form->text('nip', __('Nip'));
        $form->radio('gender', __('Gender'))->options(['1' => 'Laki-Laki', '0' => 'Permpuan'])->default('');
        $form->select('department', __('Department'))->options([
            'DKV' => 'DKV',
            'TITL' => 'TITL',
            'TJKT' => 'TJKT',
            'RPL' => 'RPL',
        ]);
        $form->date('start_intern_period', __('Start intern period'))->format('DD-MM-YYYY');
        $form->date('end_intern_period', __('End intern period'))->format('DD-MM-YYYY');
        $form->text('responsible_teacher', __('Responsible teacher'));
        $form->text('responsible_contact', __('Responsible contact'));
        $form->file('apply_letter', __('Apply letter'));

        return $form;
    }
}

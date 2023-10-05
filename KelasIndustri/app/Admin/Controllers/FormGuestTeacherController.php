<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\FormGuestTeacher;

class FormGuestTeacherController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'FormGuestTeacher';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new FormGuestTeacher());

        $grid->column('id', __('Id'));
        $grid->column('agency_name', __('Agency name'));
        $grid->column('subject_exam', __('Subject exam'));
        $grid->column('exam_date', __('Exam date'))->dateFormat('d-M-Y');
        $grid->column('exam_time', __('Exam time'));
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
        $show = new Show(FormGuestTeacher::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('agency_name', __('Agency name'));
        $show->field('subject_exam', __('Subject exam'));
        $show->field('exam_date', __('Exam date'));
        $show->field('exam_time', __('Exam time'));
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
        $form = new Form(new FormGuestTeacher());

        $form->text('agency_name', __('Agency name'));
        $form->text('subject_exam', __('Subject exam'));
        $form->date('exam_date', __('Exam date'))->format('DD-mm-YYYY');
        $form->time('exam_time', __('Exam time'))->format('HH:mm');
        $form->text('responsible_teacher', __('Responsible teacher'));
        $form->text('responsible_contact', __('Responsible contact'));
        $form->file('apply_letter', __('Apply letter'));

        return $form;
    }
}

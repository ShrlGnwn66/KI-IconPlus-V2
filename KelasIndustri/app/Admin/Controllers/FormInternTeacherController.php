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
        $grid->column('participant_name', __('Participant name'));
        $grid->column('gender', __('Gender'))->using(['1' => 'Laki-Laki', '0' => 'Perempuan']);
        $grid->column('department', __('Department'));
        $grid->column('nip', __('Nip'));
        $grid->column('agency_name', __('Agency name'));
        $grid->column('placement', __('Placement'));
        $grid->column('start_intern_period', __('Start intern period'))->dateFormat('d-M-Y');
        $grid->column('end_intern_period', __('End intern period'))->dateFormat('d-M-Y');
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
        $show->field('participant_name', __('Participant name'));
        $show->field('gender', __('Gender'))->using(['1' => 'Laki-Laki', '0' => 'Perempuan']);
        $show->field('department', __('Department'));
        $show->field('nip', __('Nip'));
        $show->field('agency_name', __('Agency name'));
        $show->field('placement', __('Placement'));
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

        $form->text('participant_name', __('Participant name'));
        $form->radio('gender', __('Gender'))->options(['1' => 'Laki-Laki', '0' => 'Permpuan'])->default('');
        $form->select('department', __('Department'))->options([
            'DKV' => 'DKV',
            'TITL' => 'TITL',
            'TJKT' => 'TJKT',
            'RPL' => 'RPL',
        ]);
        $form->text('nip', __('Nip'));
        $form->text('agency_name', __('Agency name'));
        $form->select('placement', __('Placement'))->options([
            'Semarang' => 'SBU Semarang',
            'Yogyakarta' => 'KP Yogyakarta',
            'Purwokerto' => 'KP Purwokerto',
        ]);
        $form->dateRange('start_intern_period', 'end_intern_period', 'Date Range');
        $form->text('responsible_teacher', __('Responsible teacher'));
        $form->text('responsible_contact', __('Responsible contact'));
        $form->file('apply_letter', __('Apply letter'));

        return $form;
    }
}

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
        $grid->column('participant_name', __('Nama Peserta'));
        $grid->column('gender', __('Jenis Kelamin'))->using(['1' => 'Laki-Laki', '0' => 'Perempuan']);
        $grid->column('department', __('Jurusan'));
        $grid->column('nip', __('NIP'));
        $grid->column('participant_contact', __('Kontak Peserta'));
        $grid->column('agency_name', __('Nama Instansi'));
        $grid->column('placement', __('Penempatan'));
        $grid->column('start_intern_period', __('Tanggal Mulai'))->dateFormat('d-M-Y');
        $grid->column('end_intern_period', __('Tanggal Selesai'))->dateFormat('d-M-Y');
        $grid->column('responsible_teacher', __('Penanggung Jawab'));
        $grid->column('responsible_contact', __('Kontak Penanggung Jawab'));
        $grid->column('apply_letter', __('Surat Lamaran'))->downloadable();
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
        $show->field('participant_name', __('Nama Peserta'));
        $show->field('gender', __('Jenis Kelamin'))->using(['1' => 'Laki-Laki', '0' => 'Perempuan']);
        $show->field('department', __('Jurusan'));
        $show->field('nip', __('Nip'));
        $show->field('participant_contact', __('Kontak Peserta'));
        $show->field('agency_name', __('Nama Instansi'));
        $show->field('placement', __('Penempatan'));
        $show->field('start_intern_period', __('Tanggal Mulai'));
        $show->field('end_intern_period', __('Tanggal Selesai'));
        $show->field('responsible_teacher', __('Penanggung Jawab'));
        $show->field('responsible_contact', __('Kontak Penanggung Jawab'));
        $show->field('apply_letter', __('Surat Lamaran'))->file();
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

        $form->text('participant_name', __('Nama Peserta'));
        $form->radio('gender', __('Jenis Kelamin'))->options(['1' => 'Laki-Laki', '0' => 'Permpuan'])->default('');
        $form->text('department', __('Jurusan'));
        $form->text('nip', __('Nip'));
        $form->text('participant_contact', __('Kontak Pesera'));
        $form->text('agency_name', __('Nama Instansi'));
        $form->select('placement', __('Penempatan'))->options([
            'Semarang' => 'SBU Semarang',
            'Yogyakarta' => 'KP Yogyakarta',
            'Purwokerto' => 'KP Purwokerto',
        ]);
        $form->dateRange('start_intern_period', 'end_intern_period', 'Periode Magang');
        $form->text('responsible_teacher', __('Penanggung Jawab'));
        $form->text('responsible_contact', __('Kontak Penanggung Jawab'));
        $form->file('apply_letter', __('Surat Lamaran'));

        return $form;
    }
}

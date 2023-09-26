<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\JobVacancy;

class JobVacancyController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'JobVacancy';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new JobVacancy());

        $grid->column('id', __('Id'));
        $grid->column('picture')->image();
        $grid->column('title', __('Title'));
        $grid->column('job_description', __('Job description'))->limit(15);
        $grid->column('qualifications', __('Qualifications'))->limit(15);
        $grid->column('placement', __('Placement'));
        $grid->column('work_hours', __('Work hours'));
        $grid->column('expired_date', __('Expired date'));
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
        $show = new Show(JobVacancy::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('picture')->image();
        $show->field('title', __('Title'));
        $show->field('job_description', __('Job description'));
        $show->field('qualifications', __('Qualifications'));
        $show->field('placement', __('Placement'));
        $show->field('work_hours', __('Work hours'));
        $show->field('expired_date', __('Expired date'));
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
        $form = new Form(new JobVacancy());

        $form->image('picture', __('Picture'));
        $form->text('title', __('Title'));
        $form->text('job_description', __('Job description'));
        $form->text('qualifications', __('Qualifications'));
        $form->text('placement', __('Placement'));
        $form->text('work_hours', __('Work hours'));
        $form->date('expired_date', __('Expired date'))->default(date('Y-m-d'));

        return $form;
    }
}

<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\News;

class NewsController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'News';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new News());

        $grid->column('id', __('Id'));
        $grid->column('picture')->image();
        $grid->column('title', __('Title'));
        $grid->column('date', __('Date'));
        $grid->column('description', __('Description'))->limit(20);
        $grid->column('contentnews', __('contentnews'))->limit(20);
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
        $show = new Show(News::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('picture')->image();
        $show->field('title', __('Title'));
        $show->field('date', __('Date'));
        $show->field('description', __('Description'));
        $show->field('contentnews', __('contentnews'));
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
        $form = new Form(new News());

        $form->image('picture', __('Picture'));
        $form->text('title', __('Title'))->rules('max:75');
        $form->date('date', __('Date'))->format('YYYY-MM-DD');
        $form->text('description', __('Description'))->rules('max:135');
        $form->textarea('contentnews', __('contentnews'))->rows(10);

        return $form;
    }
}

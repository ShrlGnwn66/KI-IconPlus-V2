<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\GalleryPengujiUKK;

class GalleryPengujiUKKController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'GalleryPengujiUKK';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new GalleryPengujiUKK());

        $grid->column('id', __('Id'));
        $grid->column('picture', __('Picture'))->image()->width(150);
        $grid->column('description', __('Description'))->limit(15);
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
        $show = new Show(GalleryPengujiUKK::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('picture', __('Picture'))->image();
        $show->field('description', __('Description'));
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
        $form = new Form(new GalleryPengujiUKK());

        $form->multipleImage('picture', __('Picture'));
        $form->text('description', __('Description'));

        return $form;
    }
}

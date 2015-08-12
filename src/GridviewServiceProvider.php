<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of GridviewServiceProvider
 *
 * @author Vi Quang Hoa <vyquanghoa@gmail.com>
 */

namespace Hoavq\Gridview;

use Illuminate\Support\ServiceProvider;

class GridviewServiceProvider extends ServiceProvider {

	public function register() {
		$this->app->alias('gridview', 'Collective\Html\HtmlBuilder');
//		$this->app->bindShared('gridview', function($app)
//		{
//			return new HtmlBuilder($app['url']);
//		});
	}
	
	public function provides()
	{
		return array('gridview', 'Hoavq\Gridview\GridviewBuilder');
	}

}

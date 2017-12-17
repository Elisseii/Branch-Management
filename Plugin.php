<?php namespace Elisseiidev\BranchManagement;

use System\Classes\PluginBase;
use BackendAuth;

class Plugin extends PluginBase
{
		public function registerComponents()
		{

			return [
				'Elisseiidev\BranchManagement\Components\Cities' => 'cities'
			];

		}

		public function registerSettings()
		{
		}

		public function boot() {

				\Event::listen('cms.object.listInTheme', function ($cmsObject, $objectList) {

					$user = \BackendAuth::getUser();

					$userRole = $user->role->code;

					// Error!
					//$userGroup = $user->group->code; 

				});








			//////////////////////////////////////// temporary code ///////////////////////////////////////

				// \Event::listen('cms.object.listInTheme', function ($cmsObject, $objectList) {

				// 		\Elisseiidev\BranchManagement\Models\Branches::extend(function($model) {
				// 				// App::runningInBackend() you can also use this one to make sure it will 
				// 				// execute on frontend only
				// 				if(App::runningInBackend()) {
				// 						$model::addGlobalScope('slug', function(Builder $builder) {
				// 								$builder->where('slug', '!=', 'branch1');
				// 						});            
				// 				}
				// 		});

					
				// 		if ($cmsObject instanceof \Elisseiidev\BranchManagement\Models\Branches) {

						
				// 		// Check Has Permission
				// 		if ($this->user->hasAccess('edit_technical_fields')){

				// 		}

				// 		$hasRoleFromWhichIneedTohidePages = $user->role->code === 'blabla' ? true : false;
				// 		if($hasRoleFromWhichIneedTohidePages) {
				// 			//...
				// 		}


				// 					foreach ($objectList as $index => $page) {

				// 						// we can use different matching you can use one of them
				// 						// to identify your page which you want to hide.
				// 						// Мы можем использовать другое соответствие, вы можете использовать один из них 
				// 						//для идентификации своей страницы, которую вы хотите скрыть.
										
				// 						// forgot method will hide that page
				// 						// забытый метод скроет эту страницу

				// 						// match against filename
				// 						// совпадение с именем файла
				// 						if ($record->slug !== 'branch1') {
				// 								$objectList->forget($index);
				// 						}

				// 						// OR match against title
				// 						// ИЛИ совпадение с заголовком
				// 						if ($page->title !== 'hidethispage') {
				// 								$objectList->forget($index);
				// 						}

				// 						// OR match against url
				// 						// ИЛИ совпадение с URL-адресом
				// 						if ($page->url !== '/hidethispage') {
				// 								$objectList->forget($index);
				// 						}

				// 					}


				// 		}
				// });


		}


}

jQuery(function(e){e().select2&&(e("select.lpexpress_select_field").select2(),e(document).ajaxComplete(function(){e("select.lpexpress_select_field").select2({width: 'resolve'})}))});
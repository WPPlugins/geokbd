// ----------------------------------------------------------------------------
// GeoKBD - Georgian Keyboard Library for WordPress
// v 1.0
// Dual licensed under the MIT and GPL licenses.
// ----------------------------------------------------------------------------
// Copyright (C) 2009 Ioseb Dzmanashvili
// http://www.code.ge/geokbd-wp
// ----------------------------------------------------------------------------
// Permission is hereby granted, free of charge, to any person obtaining a copy
// of this software and associated documentation files (the 'Software'), to deal
// in the Software without restriction, including without limitation the rights
// to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
// copies of the Software, and to permit persons to whom the Software is
// furnished to do so, subject to the following conditions:
// 
// The above copyright notice and this permission notice shall be included in
// all copies or substantial portions of the Software.
// 
// THE SOFTWARE IS PROVIDED 'AS IS', WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
// IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
// FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
// AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
// LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
// OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
// THE SOFTWARE.
// ----------------------------------------------------------------------------

jQuery(function() {
	var GeoKBD_checked = (GeoKBD_admin_mainLang=='KA') ? 'checked=\"checked\"' : '';
	var GeoKBDBox = '<div class=\"postbox\" id=\"geokbd\" style="">' +
		'<h3 class=\"hndle\"><span>GeoKBD - ქართული კლავიატურა</span></h3>' +
		'<div class=\"inside\">' +
			'<p>' +
				'<label>'+GeoKBD_admin_text+'&nbsp;</label>' + 
				'<input type=\"checkbox\" '+GeoKBD_checked+' name=\"geo\" id=\"geo\"/>' + 
			'</p>'+
		'</div>' +
	'</div>';
	if(GeoKBD_admin_show_checkbox==1){
		jQuery('#side-sortables').prepend(GeoKBDBox);
	}
	
	GeoKBD.map({
		form: ['post'],
		fields: GeoKBD_admin_fields
	});
	
	//GeoKBD.setGlobalLanguage(GeoKBD.KA, 'geo');

});
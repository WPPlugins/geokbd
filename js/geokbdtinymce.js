// ----------------------------------------------------------------------------
// GeoKBD - Georgian Keyboard Library for WordPress
// v 1.0
// Dual licensed under the MIT and GPL licenses.
// ----------------------------------------------------------------------------
// Copyright (C) 2009 Ioseb Dzmanashvili
// http://www.code.ge/wp-admin
// ----------------------------------------------------------------------------
// Permission is hereby granted, free of charge, to any person obtaining a copy
// of this software and associated documentation files (the "Software"), to deal
// in the Software without restriction, including without limitation the rights
// to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
// copies of the Software, and to permit persons to whom the Software is
// furnished to do so, subject to the following conditions:
// 
// The above copyright notice and this permission notice shall be included in
// all copies or substantial portions of the Software.
// 
// THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
// IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
// FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
// AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
// LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
// OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
// THE SOFTWARE.
// ----------------------------------------------------------------------------

jQuery(function() {
	(function() {
		tinymce.create('tinymce.plugins.GeoKBD', {
			init : function(ed, url) {
				GeoKBD.mapIFrame(ed.editorId + '_ifr');
			},
			getInfo : function() {
				return {
					longname : 'GeoKBD',
					author : 'Ioseb Dzmanashvili',
					authorurl : 'http://www.code.ge',
					infourl : 'http://www.code.ge/geokbd-wp',
					version : "0.1"
				};
			}
		});
		tinymce.PluginManager.add('geokbd', tinymce.plugins.GeoKBD);		
	})();
});
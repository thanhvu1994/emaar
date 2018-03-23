/*  Copyright 2017  LidPlay  (email: contact@lidplay.net)

	This program is free software; you can redistribute it and/or modify
	it under the terms of the GNU General Public License as published by
	the Free Software Foundation; either version 2 of the License, or
	(at your option) any later version.

	This program is distributed in the hope that it will be useful,
	but WITHOUT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
	GNU General Public License for more details.

	You should have received a copy of the GNU General Public License
	along with this program; if not, write to the Free Software
	Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

function lidplay(t,e,r){function l(t){var e=[];for(var r in t)e.push(encodeURIComponent(r)+"="+encodeURIComponent(t[r]));return e.join("&")}function u(t,e){return t.indexOf(e)>-1}function s(t,e){if("[object String]"==Object.prototype.toString.call(e))return u(t,e);for(var r=0;r<e.length;r++)if(u(t,e[r]))return!0;return!1}setInterval(function(){for(var i=document.getElementsByTagName("iframe"),n=0;n<i.length;n++)!u(i[n].src,e)&&s(i[n].src,r)&&(t.url=i[n].src,i[n].getAttribute("subtitles_src")?t.subtitles_src=i[n].getAttribute("subtitles_src"):delete t.subtitles_src,i[n].getAttribute("subtitles_label")?t.subtitles_label=i[n].getAttribute("subtitles_label"):delete t.subtitles_label,i[n].getAttribute("default_resolution")?t.default_resolution=i[n].getAttribute("default_resolution"):delete t.default_resolution,i[n].getAttribute("start")?t.start=i[n].getAttribute("start"):delete t.start,i[n].getAttribute("autoplay")?t.autoplay=i[n].getAttribute("autoplay"):delete t.autoplay,i[n].src=e+l(t),i[n].setAttribute("allowfullscreen",""),i[n].setAttribute("mozallowfullscreen",""),i[n].setAttribute("webkitallowfullscreen",""),i[n].removeAttribute("sandbox"))},500)}
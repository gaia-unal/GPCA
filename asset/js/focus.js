$(function() {
var url = window.location;
   var element = $('ul.sidebar-menu a').filter(function() {
       return this.href == url;
   }).addClass('active').parent().parent().addClass('in').parent();
   if (element.is('li')) {
       element.addClass('active');
   }

});
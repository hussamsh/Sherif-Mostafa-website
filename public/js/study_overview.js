$(document).ready(function(){


var $tabs = $('#tabs');
    $tabs.responsiveTabs({
        rotate: false,
        startCollapsed: 'accordion',
        collapsible: 'accordion',
        setHash: true,
        disabled: [3,4]
    });

});

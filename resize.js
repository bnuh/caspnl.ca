resize();

function resize() {
    if ( $('#canada-map').length ) {
        var svg = $("#canada-map").get(0);
        if (window.screen.width >= 1024) {
            svg.setAttribute('width', '50%');
        }
        else {
            svg.setAttribute('width', '100%');
        }
    }
    else if ( $('#decision-tree').length ) {
        var svg = $("#decision-tree").get(0);
        if (window.screen.width >= 1024) {
            svg.setAttribute('width', '85%');
        }
        else {
            svg.setAttribute('width', '100%');
        }
    }
}
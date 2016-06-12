+function(){
  _addListener();

    function _addListener() {
        if (document.addEventListener) {
            document.addEventListener("DOMContentLoaded", function() {
                EnvHome.addWidthToElements();
            });
        }
    }
}();

var EnvHome = (function() {
   
    function init() {
          
    }
    function resizeListener() {
        init();
    }
    function addWidthToElements() {
        // init()
        // window.addEventListener("resize", resizeListener);
    }
    return {
        addWidthToElements: addWidthToElements
    }
}())
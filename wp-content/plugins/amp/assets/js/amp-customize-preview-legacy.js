window.ampCustomizePreview=function(e){"use strict";return{boot:function(i){e.bind("preview-ready",(function(){e.preview.bind("active",(function(){e.preview.send("amp-status",i)}))}))}}}(wp.customize);
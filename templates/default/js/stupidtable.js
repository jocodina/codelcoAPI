(function(d){d.fn.stupidtable=function(b){return this.each(function(){var a=d(this);b=b||{};b=d.extend({},d.fn.stupidtable.default_sort_fns,b);a.on("click","th",function(){var n=a.children("tbody").children("tr"),e=d(this),j=0,m=d.fn.stupidtable.dir;a.find("th").slice(0,e.index()).each(function(){var a=d(this).attr("colspan")||1;j+=parseInt(a,10)});var l=e.data("sort-dir")===m.ASC?m.DESC:m.ASC,p=l==m.DESC?e.data("sort-desc")||e.data("sort")||null:e.data("sort")||null;null!==p&&(a.trigger("beforetablesort",
{column:j,direction:l}),a.css("display"),setTimeout(function(){var k=[],c=b[p];n.each(function(a,b){var c=d(b).children().eq(j),e=c.data("sort-value"),c="undefined"!==typeof e?e:c.text();k.push(c)});var f=[],g=0;if(e.data("sort-dir")&&!e.data("sort-desc"))for(c=k.length-1;0<=c;c--)f.push(c);else for(var h=k.slice(0).sort(c),c=0;c<k.length;c++){for(g=d.inArray(k[c],h);-1!=d.inArray(g,f);)g++;f.push(g)}a.find("th").data("sort-dir",null).removeClass("sorting-desc sorting-asc");e.data("sort-dir",l).addClass("sorting-"+
l);g=n.slice(0);for(h=c=0;h<f.length;h++)c=f[h],g[c]=n[h];f=d(g);a.children("tbody").append(f);a.trigger("aftertablesort",{column:j,direction:l});a.css("display")},10))})})};d.fn.stupidtable.dir={ASC:"asc",DESC:"desc"};d.fn.stupidtable.default_sort_fns={"int":function(b,a){return parseInt(b,10)-parseInt(a,10)},"float":function(b,a){return parseFloat(b)-parseFloat(a)},string:function(b,a){return b<a?-1:b>a?1:0},"string-ins":function(b,a){b=b.toLowerCase();a=a.toLowerCase();return b<a?-1:b>a?1:0}}})(jQuery);

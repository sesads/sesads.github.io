/* Typing Animation Javascript Begins below */
!function(b){var a=function(d,c){this.el=b(d);this.options=b.extend({},b.fn.typed.defaults,c);this.isInput=this.el.is("input");this.attr=this.options.attr;this.showCursor=this.isInput?false:this.options.showCursor;this.elContent=this.attr?this.el.attr(this.attr):this.el.text();this.contentType=this.options.contentType;this.typeSpeed=this.options.typeSpeed;this.startDelay=this.options.startDelay;this.backSpeed=this.options.backSpeed;this.backDelay=this.options.backDelay;this.stringsElement=this.options.stringsElement;this.strings=this.options.strings;this.strPos=0;this.arrayPos=0;this.stopNum=0;this.loop=this.options.loop;this.loopCount=this.options.loopCount;this.curLoop=0;this.stop=false;this.cursorChar=this.options.cursorChar;this.shuffle=this.options.shuffle;this.sequence=[];this.build()};a.prototype={constructor:a,init:function(){var c=this;c.timeout=setTimeout(function(){for(var d=0;d<c.strings.length;++d){c.sequence[d]=d}if(c.shuffle){c.sequence=c.shuffleArray(c.sequence)}c.typewrite(c.strings[c.sequence[c.arrayPos]],c.strPos)},c.startDelay)},build:function(){var d=this;if(this.showCursor===true){this.cursor=b('<span class="typed-cursor">'+this.cursorChar+"</span>");this.el.after(this.cursor)}if(this.stringsElement){this.strings=[];this.stringsElement.hide();console.log(this.stringsElement.children());var c=this.stringsElement.children();b.each(c,function(e,f){d.strings.push(b(f).html())})}this.init()},typewrite:function(d,e){if(this.stop===true){return}var f=Math.round(Math.random()*(100-30))+this.typeSpeed;var c=this;c.timeout=setTimeout(function(){var i=0;var l=d.substr(e);if(l.charAt(0)==="^"){var k=1;if(/^\^\d+/.test(l)){l=/\d+/.exec(l)[0];k+=l.length;i=parseInt(l)}d=d.substring(0,e)+d.substring(e+k)}if(c.contentType==="html"){var h=d.substr(e).charAt(0);if(h==="<"||h==="&"){var g="";var j="";if(h==="<"){j=">"}else{j=";"}while(d.substr(e+1).charAt(0)!==j){g+=d.substr(e).charAt(0);e++;if(e+1>d.length){break}}e++;g+=j}}c.timeout=setTimeout(function(){if(e===d.length){c.options.onStringTyped(c.arrayPos);if(c.arrayPos===c.strings.length-1){c.options.callback();c.curLoop++;if(c.loop===false||c.curLoop===c.loopCount){return}}c.timeout=setTimeout(function(){c.backspace(d,e)},c.backDelay)}else{if(e===0){c.options.preStringTyped(c.arrayPos)}var m=d.substr(0,e+1);if(c.attr){c.el.attr(c.attr,m)}else{if(c.isInput){c.el.val(m)}else{if(c.contentType==="html"){c.el.html(m)}else{c.el.text(m)}}}e++;c.typewrite(d,e)}},i)},f)},backspace:function(d,e){if(this.stop===true){return}var f=Math.round(Math.random()*(100-30))+this.backSpeed;var c=this;c.timeout=setTimeout(function(){if(c.contentType==="html"){if(d.substr(e).charAt(0)===">"){var g="";while(d.substr(e-1).charAt(0)!=="<"){g-=d.substr(e).charAt(0);e--;if(e<0){break}}e--;g+="<"}}var h=d.substr(0,e);if(c.attr){c.el.attr(c.attr,h)}else{if(c.isInput){c.el.val(h)}else{if(c.contentType==="html"){c.el.html(h)}else{c.el.text(h)}}}if(e>c.stopNum){e--;c.backspace(d,e)}else{if(e<=c.stopNum){c.arrayPos++;if(c.arrayPos===c.strings.length){c.arrayPos=0;if(c.shuffle){c.sequence=c.shuffleArray(c.sequence)}c.init()}else{c.typewrite(c.strings[c.sequence[c.arrayPos]],e)}}}},f)},shuffleArray:function(f){var c,e,d=f.length;if(d){while(--d){e=Math.floor(Math.random()*(d+1));c=f[e];f[e]=f[d];f[d]=c}}return f},reset:function(){var c=this;clearInterval(c.timeout);var d=this.el.attr("id");this.el.empty();if(typeof this.cursor!=="undefined"){this.cursor.remove()}this.strPos=0;this.arrayPos=0;this.curLoop=0;this.options.resetCallback()}};b.fn.typed=function(c){return this.each(function(){var f=b(this),e=f.data("typed"),d=typeof c=="object"&&c;if(e){e.reset()}f.data("typed",(e=new a(this,d)));if(typeof c=="string"){e[c]()}})};b.fn.typed.defaults={strings:["These are the default values...","You know what you should do?","Use your own!","Have a great day!"],stringsElement:null,typeSpeed:0,startDelay:0,backSpeed:0,shuffle:false,backDelay:500,loop:false,loopCount:false,showCursor:true,cursorChar:"|",attr:null,contentType:"html",callback:function(){},preStringTyped:function(){},onStringTyped:function(){},resetCallback:function(){}}}(window.jQuery);

$(document).ready(function() {

  'use strict';

  // ---------- typed.s ---------- //
  var typed = $(".typed");
  $(function() {
    typed.typed({
      strings: ["your Apps", "your Business", "Events", "your Enterprise", "Anything..."],
      typeSpeed: 100,
      loop: true,
    });
  })
});


/** This is animation for Programmer for Hire */
// Wrap every letter in a span
$('.ml14 .letters').each(function(){
    $(this).html($(this).text().replace(/([^\x00-\x80]|\w)/g, "<span class='letter'>$&</span>"));
  });
  
  anime.timeline({loop: true})
    .add({
      targets: '.ml14 .line',
      scaleX: [0,1],
      opacity: [0.5,1],
      easing: "easeInOutExpo",
      duration: 900
    }).add({
      targets: '.ml14 .letter',
      opacity: [0,1],
      translateX: [40,0],
      translateZ: 0,
      scaleX: [0.3, 1],
      easing: "easeOutExpo",
      duration: 800,
      offset: '-=600',
      delay: function(el, i) {
        return 150 + 25 * i;
      }
    }).add({
      targets: '.ml14',
      opacity: 0,
      duration: 1000,
      easing: "easeOutExpo",
      delay: 1000
    });

    /** STOP animation for Programmer for Hire */

    /** START Animation for little serne sparkle */
    // Wrap every letter in a span
$('.ml13').each(function(){
    $(this).html($(this).text().replace(/([^\x00-\x80]|\w)/g, "<span class='letter'>$&</span>"));
  });
  
  anime.timeline({loop: true})
    .add({
      targets: '.ml13 .letter',
      translateY: [100,0],
      translateZ: 0,
      opacity: [0,1],
      easing: "easeOutExpo",
      duration: 1400,
      delay: function(el, i) {
        return 300 + 30 * i;
      }
    }).add({
      targets: '.ml13 .letter',
      translateY: [0,-100],
      opacity: [1,0],
      easing: "easeInExpo",
      duration: 1200,
      delay: function(el, i) {
        return 100 + 30 * i;
      }
    });

    /** START Animation for little serne sparkle */

    /* Online Millionaires Animation Start */
    anime.timeline({loop: true})
  .add({
    targets: '.ml5 .line',
    opacity: [0.5,1],
    scaleX: [0, 1],
    easing: "easeInOutExpo",
    duration: 700
  }).add({
    targets: '.ml5 .line',
    duration: 600,
    easing: "easeOutExpo",
    translateY: function(e, i, l) {
      var offset = -0.625 + 0.625*2*i;
      return offset + "em";
    }
  }).add({
    targets: '.ml5 .ampersand',
    opacity: [0,1],
    scaleY: [0.5, 1],
    easing: "easeOutExpo",
    duration: 600,
    offset: '-=600'
  }).add({
    targets: '.ml5 .letters-left',
    opacity: [0,1],
    translateX: ["0.5em", 0],
    easing: "easeOutExpo",
    duration: 600,
    offset: '-=300'
  }).add({
    targets: '.ml5 .letters-right',
    opacity: [0,1],
    translateX: ["-0.5em", 0],
    easing: "easeOutExpo",
    duration: 600,
    offset: '-=600'
  }).add({
    targets: '.ml5',
    opacity: 0,
    duration: 1000,
    easing: "easeOutExpo",
    delay: 1000
  });
  /* Online Millionaires Animation End */

  /* Blessing Shoes Animation Start */
  // Wrap every letter in a span
$('.ml6 .letters').each(function(){
  $(this).html($(this).text().replace(/([^\x00-\x80]|\w)/g, "<span class='letter'>$&</span>"));
});

anime.timeline({loop: true})
  .add({
    targets: '.ml6 .letter',
    translateY: ["1.1em", 0],
    translateZ: 0,
    duration: 750,
    delay: function(el, i) {
      return 50 * i;
    }
  }).add({
    targets: '.ml6',
    opacity: 0,
    duration: 1000,
    easing: "easeOutExpo",
    delay: 1000
  });
/* Blessing Shoes Animation End */


/*************ml4***********/
var ml4 = {};
ml4.opacityIn = [0,1];
ml4.scaleIn = [0.2, 1];
ml4.scaleOut = 3;
ml4.durationIn = 800;
ml4.durationOut = 600;
ml4.delay = 500;

anime.timeline({loop: true})
  .add({
    targets: '.ml4 .letters-1',
    opacity: ml4.opacityIn,
    scale: ml4.scaleIn,
    duration: ml4.durationIn
  }).add({
    targets: '.ml4 .letters-1',
    opacity: 0,
    scale: ml4.scaleOut,
    duration: ml4.durationOut,
    easing: "easeInExpo",
    delay: ml4.delay
  }).add({
    targets: '.ml4 .letters-2',
    opacity: ml4.opacityIn,
    scale: ml4.scaleIn,
    duration: ml4.durationIn
  }).add({
    targets: '.ml4 .letters-2',
    opacity: 0,
    scale: ml4.scaleOut,
    duration: ml4.durationOut,
    easing: "easeInExpo",
    delay: ml4.delay
  }).add({
    targets: '.ml4 .letters-3',
    opacity: ml4.opacityIn,
    scale: ml4.scaleIn,
    duration: ml4.durationIn
  }).add({
    targets: '.ml4 .letters-3',
    opacity: 0,
    scale: ml4.scaleOut,
    duration: ml4.durationOut,
    easing: "easeInExpo",
    delay: ml4.delay
  }).add({
    targets: '.ml4',
    opacity: 0,
    duration: 500,
    delay: 500
  });
/*****************ml4*************/


/* Bernard Victor Animation Start */
  // Wrap every letter in a span
$('.ml3').each(function(){
  $(this).html($(this).text().replace(/([^\x00-\x80]|\w)/g, "<span class='letter'>$&</span>"));
});

anime.timeline({loop: true})
  .add({
    targets: '.ml3 .letter',
    opacity: [0,1],
    easing: "easeInOutQuad",
    duration: 2250,
    delay: function(el, i) {
      return 150 * (i+1)
    }
  }).add({
    targets: '.ml3',
    opacity: 0,
    duration: 1000,
    easing: "easeOutExpo",
    delay: 1000
  });
/* Bernard Victor Animation End */


/* MADE.WITH.LOVE Animation Start */
  // Wrap every letter in a span
$('.ml16').each(function(){
  $(this).html($(this).text().replace(/([^\x00-\x80]|\w)/g, "<span class='letter'>$&</span>"));
});

anime.timeline({loop: true})
  .add({
    targets: '.ml16 .letter',
    translateY: [-100,0],
    easing: "easeOutExpo",
    duration: 1400,
    delay: function(el, i) {
      return 30 * i;
    }
  }).add({
    targets: '.ml16',
    opacity: 0,
    duration: 1000,
    easing: "easeOutExpo",
    delay: 1000
  });
  /* MADE.WITH.LOVE Animation End */
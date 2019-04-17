<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>

	<title>Orphanou Estates</title>
	<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>

  <link href="https://fonts.googleapis.com/css?family=Oleo+Script:400,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Teko:400,700" rel="stylesheet">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

</head>
<link rel="stylesheet" type="text/css" href="{{ url('/css/news.css') }}">

<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
@include('main')

  <div class="container-fluid" style="margin-top: 40px; color: white;">
    <h1>Latest News</h1>
  </div>
  
  
	<div class="container-fluid" style="margin-top: -100px;">
  
    <section id="pinBoot">

    @foreach($ARTICLE as $row)

<!--"{{$row->IMAGE}}"-->
<!--document.getElementById('imageBox').src = "img/apple_" + total + ".png";-->
<!--<article class="white-panel"><img src="images/r+'$i'+.jpg" alt="">-->
<!--<article class="white-panel"><img src="`images/${row->IMAGE}`" alt="">-->
<!--<article class="white-panel"><img src="data:image/png;base64,{{ chunk_split(base64_encode($row->IMAGE)) }}" alt="">-->
<!--<article class="white-panel"><img src= "'images/' + {{$row->IMAGE}}" alt="">-->
    <article class="white-panel"><img src= "{{$row->IMAGE}}" alt="">
    <h4>{{$row->TITLE}}</h4>
    <p>{{$row->DATE}}</p>
    <p>{{$row->DOCUMENT}}</p>
  </article>
@endforeach

</section>
</div>

<footer class="container-fluid text-center">
  <div class="row">
    <a href="#myPage" title="To Top" style="background-color: transparent;">
      <span class="glyphicon glyphicon-chevron-up"></span>
    </a>
  </div>
  <div class="row">
    <a href="PrivacyPolicy"style="background-color: transparent; color: white">Privacy Policy</a><p>
    <a href="TermsAndConditions"style="background-color: transparent; color: white">Terms & Conditions</a>
    <p>© Copyright 2018. Orphanou Nicos ltd. All Rights Reserved. Sitemap.
    Real Estate Website Design by EPL449 Team 1</p>
  </div>
</footer>

</body>

<script>

$(".navbar a, footer a[href='#myPage']").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });

$(document).ready(function() {
$('#pinBoot').pinterest_grid({
no_columns: 4,
padding_x: 10,
padding_y: 10,
margin_bottom: 50,
single_column_breakpoint: 700
});
});

;(function ($, window, document, undefined) {
    var pluginName = 'pinterest_grid',
        defaults = {
            padding_x: 10,
            padding_y: 10,
            no_columns: 3,
            margin_bottom: 50,
            single_column_breakpoint: 700
        },
        columns,
        $article,
        article_width;

    function Plugin(element, options) {
        this.element = element;
        this.options = $.extend({}, defaults, options) ;
        this._defaults = defaults;
        this._name = pluginName;
        this.init();
    }

    Plugin.prototype.init = function () {
        var self = this,
            resize_finish;

        $(window).resize(function() {
            clearTimeout(resize_finish);
            resize_finish = setTimeout( function () {
                self.make_layout_change(self);
            }, 11);
        });

        self.make_layout_change(self);

        setTimeout(function() {
            $(window).resize();
        }, 500);
    };

    Plugin.prototype.calculate = function (single_column_mode) {
        var self = this,
            tallest = 0,
            row = 0,
            $container = $(this.element),
            container_width = $container.width();
            $article = $(this.element).children();

        if(single_column_mode === true) {
            article_width = $container.width() - self.options.padding_x;
        } else {
            article_width = ($container.width() - self.options.padding_x * self.options.no_columns) / self.options.no_columns;
        }

        $article.each(function() {
            $(this).css('width', article_width);
        });

        columns = self.options.no_columns;

        $article.each(function(index) {
            var current_column,
                left_out = 0,
                top = 0,
                $this = $(this),
                prevAll = $this.prevAll(),
                tallest = 0;

            if(single_column_mode === false) {
                current_column = (index % columns);
            } else {
                current_column = 0;
            }

            for(var t = 0; t < columns; t++) {
                $this.removeClass('c'+t);
            }

            if(index % columns === 0) {
                row++;
            }

            $this.addClass('c' + current_column);
            $this.addClass('r' + row);

            prevAll.each(function(index) {
                if($(this).hasClass('c' + current_column)) {
                    top += $(this).outerHeight() + self.options.padding_y;
                }
            });

            if(single_column_mode === true) {
                left_out = 0;
            } else {
                left_out = (index % columns) * (article_width + self.options.padding_x);
            }

            $this.css({
                'left': left_out,
                'top' : top
            });
        });

        this.tallest($container);
        $(window).resize();
    };

    Plugin.prototype.tallest = function (_container) {
        var column_heights = [],
            largest = 0;

        for(var z = 0; z < columns; z++) {
            var temp_height = 0;
            _container.find('.c'+z).each(function() {
                temp_height += $(this).outerHeight();
            });
            column_heights[z] = temp_height;
        }

        largest = Math.max.apply(Math, column_heights);
        _container.css('height', largest + (this.options.padding_y + this.options.margin_bottom));
    };

    Plugin.prototype.make_layout_change = function (_self) {
        if($(window).width() < _self.options.single_column_breakpoint) {
            _self.calculate(true);
        } else {
            _self.calculate(false);
        }
    };

    $.fn[pluginName] = function (options) {
        return this.each(function () {
            if (!$.data(this, 'plugin_' + pluginName)) {
                $.data(this, 'plugin_' + pluginName,
                new Plugin(this, options));
            }
        });
    }

})(jQuery, window, document);
</script>

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
<style>
  body {
      font: 400 15px Lato, sans-serif;
      line-height: 1.8;
      background: linear-gradient(to left, #f4511e , #565671);
  }
 
  .container-fluid {
      padding: 60px 50px;
  }
  .bg-grey {
      background-color: #f6f6f6;
  }
  .logo-small {
      color: #f4511e;
      font-size: 50px;
  }
  .logo {
      color: #f4511e;
      font-size: 200px;
  }

 
  .navbar {
      margin-bottom: 0;
      background-color: #f4511e;
      z-index: 9999;
      border: 0;
      font-size: 12px !important;
      line-height: 1.42857143 !important;
      letter-spacing: 4px;
      border-radius: 0;
      font-family: Montserrat, sans-serif;
  }
  .navbar li a, .navbar .navbar-brand {
      color: #fff !important;
  }
  .navbar-nav li a:hover, .navbar-nav li.active a {
      color: #f4511e !important;
      background-color: #fff !important;
  }
  .navbar-default .navbar-toggle {
      border-color: transparent;
      color: #fff !important;
  }

  .navbar-default .navbar-nav>.open>a, .navbar-default .navbar-nav>.open>a:focus, .navbar-default .navbar-nav>.open>a:hover {
    color: #555;
    background-color: #cd3100;
}
  footer .glyphicon {
      font-size: 20px;
      margin-bottom: 20px;
      color: #f4511e;
  }
  .slideanim {visibility:hidden;}
  .slide {
      animation-name: slide;
      -webkit-animation-name: slide;
      animation-duration: 1s;
      -webkit-animation-duration: 1s;
      visibility: visible;
  }

  .form-control{
		display: unset;
	}

	a {
    background-color: #f4511e;
	}

  @keyframes slide {
    0% {
      opacity: 0;
      transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      transform: translateY(0%);
    }
  }
  @-webkit-keyframes slide {
    0% {
      opacity: 0;
      -webkit-transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      -webkit-transform: translateY(0%);
    }
  }
  @media screen and (max-width: 768px) {
    .col-sm-4 {
      text-align: center;
      margin: 25px 0;
    }
    .btn-lg {
        width: 100%;
        margin-bottom: 35px;
    }
  }
  @media screen and (max-width: 480px) {
    .logo {
        font-size: 150px;
    }
  }


#pinBoot {
  position: relative;
  max-width: 100%;
  width: 100%;
}
img:not(#logo) {
  width: 100%;
  max-width: 100%;
  height: auto;
}
.white-panel {
  position: absolute;
  background: white;
  box-shadow: 0px 1px 2px rgba(0, 0, 0, 0.3);
  padding: 10px;
}
/*
stylize any heading tags withing white-panel below
*/

.white-panel h1 {
  font-size: 1em;
}
.white-panel h1 a {
  color: black;
}
.white-panel:hover {
  box-shadow: 1px 1px 10px rgba(0, 0, 0, 0.5);
  margin-top: -5px;
  -webkit-transition: all 0.3s ease-in-out;
  -moz-transition: all 0.3s ease-in-out;
  -o-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
}

  </style>
<body>
  <nav class="navbar navbar-default navbar-fixed-top" style="height: 80px;">
  <div class="container" style="width: 100%;">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="home"><img name="img" id="logo" src="images/logo.png" height="50px" width="155px"></a>
    </div>
    <div class="collapse navbar-collapse col-sm-8" id="myNavbar" style="top: 15px;">
    	<ul class="nav navbar-nav">
          <li><a href="home">HOME</a></li>
          <li class="dropdown mega-dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">SERVICES<span class="caret"></span></a>        
            <ul class="dropdown-menu" style="background: #f4511e;">
                    <li onclick="buyrent()"><a href="BuyRent">TO SALE / TO RENT</a></li>
                    <li><a href="SellLet">SELL / LET</a></li>
                </ul>       
          </li>
                
                <li><a href="about">ABOUT US</a></li>
            <li onclick="contact()"><a href="contact">CONTACT US</a></li>
            <li><a href="news">NEWS</a></li>
        </ul>
			</div>
			
  </div>
</nav>

  <div class="container-fluid" style="margin-top: 40px; color: white;">
    <h1>Latest News</h1>
  </div>
	<div class="container-fluid" style="margin-top: -100px;">
  
    <section id="pinBoot">

      <article class="white-panel"><img src="images/r7.jpg" alt="">
        <h4>Current property market</h4>
        <p>Cyprus is seen by many as the jewel of the Mediterranean, with is idyllic location and almost all year round sunshine, you might be thinking what else makes Cyprus the perfect place to live? Just last year residential sales in Cyprus increased with Limassol seeing up to a 36% growth in sales according to Cyprus Real Estate Market Report from PwC Cyprus.
 
        In 2018 we have seen the growth continuing due to  increased demand from foreign buyers predominately buying apartments within the city of Limassol (66% buying flats). The near future of buying and renting properties in Cyprus, especially Limassol is clear. 
        </p>
      </article>

      <article class="white-panel"> <img src="images/r8.jpg" alt="">
        <h4>Sell or Rent Cyprus Property?</h4>
        <p>Cyprus is a great place to live and is currently an excellent location to sell or let your property too. Just in the first 5 months of 2018 Cyprus saw a 31% increase to 3,612 sales of property compared to 2,767 the year before. 
 
        Deciding whether to sell or let your property can be a difficult decision as there are many different factors to consider such as your future housing plans, current property prices and your financial position. At Fox Smart whether you decide to sell or let your property, we are here to help you.
         
        Here at Fox Smart Estate Agents we make the selling and letting process simple. 
        </p>
      </article>

      <article class="white-panel"> <img src="images/r9.jpg" alt="">
        <h4>Selling your Cyprus property</h4>
        <p>When deciding to part with a property, selling is the most popular choice, mostly due to obvious financial reasons. Selling a property and receiving the payout means that this can then be invested into a new property. As this is common, some buyers and sellers find themselves in a chain where they are waiting on the other homeowners to move on before the transaction can be completed. 
 
        We already have many highly sought after properties for sale in Cyprus on our website, your property could be one of them with our simple process!
        </p>
      </article>


      <article class="white-panel"> <img src="images/r10.jpg" alt="">
        <h4>Renting your Cyprus property</h4>
        <p>The demand for properties to rent in Cyprus is rising, the countries growing economic stability and its ideal Mediterranean location are attracting more renters year on year.

        Letting your property can be a great investment, many homeowners consider this when the property can be let for more than the owners outgoings of the property. A non-permanent move is another reason why you may let your property, if you are moving away and intending to return, then letting may be for you. 
         
        You must ensure that you are up to date with all legislation around letting your Cyprus property.
        </p>
      </article>

      <article class="white-panel"> <img src="images/r4.jpg" alt="">
        <h4>Tax breaks for NPL borrowers</h4>
        <p>New legislation offers tax breaks to borrowers with Non-Performing Loans (NPLs). Specifically, when they wish to sell mortgaged property to pay off their loans, they can benefit from tax breaks.
 
        In the case of an ordinary property sale the state collects taxes in the following ways.
         
        The seller pays a 20% capital gains tax on the calculated sales profit. If the seller is considered a dealer in land income tax instead of capital gains tax is paid.
         
        It is understood that at the time of sale the seller must pay all sewage fees, municipal and state property taxes.
        </p>
      </article>

      <article class="white-panel"> <img src="images/r1.jpg" alt="">
        <h4>Helping hand</h4>
        <p>Consequently, if the buyer had an NPL on 31/12/2015, sells the property to a third party for €200.000 and pays the whole amount in the loan, the state lends a helping hand by abolishing all of the above taxes, giving borrowers a chance to pay off banks.
 
        One of the main benefits of the new legislation is that it offers NPL borrowers an alternative to the pressure brought upon them by banks to sell to them at low prices. Borrowers can now shop around for interested buyers to sell to at a higher price and still enjoy the tax breaks.
        </p>
      </article>



      <article class="white-panel"><img src="images/r2.jpg" alt="">
        <h4>Large number of buyers buying affordable properties for cash</h4>
        <p>What is more, he says, bonded transfers actually represented only 45% of all transfers that took place between April and September this year, with the rest being transfers as a result of cash purchases. But when it came to value, bonded transfers accounted for some 60% of the total.

        “In other words, 55% of buyers currently are cash buyers whose transfers are only worth 40% of the total value - and that indicates a large number of buyers who are acquiring lower-priced properties for cash.” Statistics compiled for BetterBond by independent property data company Lightstone show that in real terms, the total number of transfers registered in the Deeds Office during the second and third quarters.</p>
      </article>

      <article class="white-panel"> <img src="images/r3.jpg" alt="">
        <h4>The affordable property market is outperforming the rest</h4>
        <p>In a recent evaluation of the total eight million South African properties,Lightstone revealed that the affordable sector (low and mid value) is by far the largest portion of the residential property market, amounting to 71,4% of the total volume of properties in South Africa.

        Lightstone’s affordable property market is defined as properties with a Lightstone automated valuation of R 700 000 or less and a total of 94,2% of these properties are classified as freehold.</p>
      </article>

    </section>



</div>

	
</body>

<script>

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

	$(document).ready(function(){
		
    $(".dropdown").hover(            
        function() {
            $('.dropdown-menu', this).not('.in .dropdown-menu').stop(true,true).slideDown("400");
            $(this).toggleClass('open');        
        },
        function() {
            $('.dropdown-menu', this).not('.in .dropdown-menu').stop(true,true).slideUp("400");
            $(this).toggleClass('open');       
        }
    );
});
</script>
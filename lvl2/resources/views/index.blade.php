@extends('master')
@section('titol')
index
@stop
@section('header')
  <h2>INICI</h2>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                  <li data-target="#myCarousel" data-slide-to="1"></li>
                  <li data-target="#myCarousel" data-slide-to="2"></li>
                  <li data-target="#myCarousel" data-slide-to="3"></li>
                </ol>

                <!-- Wrapper for slides -->
                 <div class="carousel-inner" role="listbox">

                  <div class="item active">
                    <img src="img/primera.jpg" alt="Chania" width="1150" height="100">
                  </div>

                  <div class="item">
                    <img src="img/segona.jpg" alt="Chania" width="1150" height="100">
                  </div>
                
                  <div class="item">
                    <img src="img/tercera.jpg" alt="Flower" width="1150" height="100">
                  </div>

                  <div class="item">
                    <img src="img/quarta.jpg" alt="Flower" width="1150" height="100">
                  </div>
              
                </div>

                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                  <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                  <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>


@stop
@section('content')


<div class="container">
  <div class="row">
    <div class="col-md-12">
            <div class="input-group" id="adv-search">
                <input type="text" class="form-control" placeholder="Cerca avançada" />
                <div class="input-group-btn">
                    <div class="btn-group" role="group">
                        <div class="dropdown dropdown-lg">
                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><span class="caret"></span></button>
                            <div class="dropdown-menu dropdown-menu-right" role="menu">
                                <form class="form-horizontal" role="form">

                                <div class="form-group">
                                    <label for="filter">Accesibilitat</label>
                                    <select class="form-control">
                                        <option value="0" selected>Cotxe propi</option>
                                        <option value="1">Tranport public</option>
                                    </select>
                                  </div>

                                  <div class="form-group">
                                    <label for="contain">Capacitat</label>
                                    <input class="form-control" type="text" />
                                  </div>

                                  <div class="form-group">
                                    <label for="filter">Disponibilitat</label>
                                      
                                    <input class="form-control" type="date" value="2017-05-20" name="dataInici"> 
                                      <br>
                                      <br>
                                      <br>
                                    <input class="form-control" type="date" value="2017-05-22" name="dataFinal"> 
                                  </div>

                                  <label for="contain">Instal·lacions</label>
                                    <select name="langOpt[]" multiple id="langOpt">
                                      <option value="Billar">Billar</option>
                                      <option value="CampFutbol">Camp de futbol</option>
                                      <option value="CampTenis">Camp de tenis</option>
                                      <option value="Internet">Internet</option>
                                      <option value="Piscina">Piscina</option>
                                      <option value="Projector">Projector</option>
                                      <option value="SalaComuna">Sala comuna</option>
                                      <option value="TenisTaula">Tenis taula</option>
                                      <option value="Altres">Altres</option>
                                    </select>

                                    <script src="jquery.min.js"></script>
                                    <script src="jquery.multiselect.js"></script>
                                      <script>
                                        $('#langOpt').multiselect({
                                            columns: 1,
                                            placeholder: 'Seleciona les instal·lacions'
                                        });

                                        $('#langOpt2').multiselect({
                                            columns: 1,
                                            placeholder: 'Seleciona les instal·lacions',
                                            search: true
                                        });

                                        $('#langOpt3').multiselect({
                                            columns: 1,
                                            placeholder: 'Seleciona les instal·lacions',
                                            search: true,
                                            selectAll: true
                                        });

                                        $('#langOptgroup').multiselect({
                                            columns: 4,
                                            placeholder: 'Seleciona les instal·lacions',
                                            search: true,
                                            selectAll: true
                                        });
                                     </script>
                              
                                   <br>

                               <div class="form-group">
                                    <label for="contain">Numero d'habitacions</label>
                                    <input class="form-control" type="text" />
                               </div>

                                <div class="form-group">
                                    <label for="contain">Preu minim</label>
                                    <input class="form-control" type="number"/>
                                </div>

                                <div class="form-group">
                                    <label for="contain">Ubicació</label>
                                    <input class="form-control" type="text" />
                                </div>                          

                                <div class="form-group">
                                    <label for="contain">Valoració</label>
                                       <div class="row lead">
                                            <div id="hearts" class="starrr"></div>
                                            <div id="heartsLletres"><p>Has escollit <span id="count">0</span> estrelles</p></div>
                                      </div>
                                      <script>
                                        var __slice = [].slice;

                                        (function($, window) {
                                          var Starrr;

                                          Starrr = (function() {
                                            Starrr.prototype.defaults = {
                                              rating: void 0,
                                              numStars: 5,
                                              change: function(e, value) {}
                                            };

                                            function Starrr($el, options) {
                                              var i, _, _ref,
                                                _this = this;

                                              this.options = $.extend({}, this.defaults, options);
                                              this.$el = $el;
                                              _ref = this.defaults;
                                              for (i in _ref) {
                                                _ = _ref[i];
                                                if (this.$el.data(i) != null) {
                                                  this.options[i] = this.$el.data(i);
                                                }
                                              }
                                              this.createStars();
                                              this.syncRating();
                                              this.$el.on('mouseover.starrr', 'span', function(e) {
                                                return _this.syncRating(_this.$el.find('span').index(e.currentTarget) + 1);
                                              });
                                              this.$el.on('mouseout.starrr', function() {
                                                return _this.syncRating();
                                              });
                                              this.$el.on('click.starrr', 'span', function(e) {
                                                return _this.setRating(_this.$el.find('span').index(e.currentTarget) + 1);
                                              });
                                              this.$el.on('starrr:change', this.options.change);
                                            }

                                            Starrr.prototype.createStars = function() {
                                              var _i, _ref, _results;

                                              _results = [];
                                              for (_i = 1, _ref = this.options.numStars; 1 <= _ref ? _i <= _ref : _i >= _ref; 1 <= _ref ? _i++ : _i--) {
                                                _results.push(this.$el.append("<span class='glyphicon .glyphicon-star-empty'></span>"));
                                              }
                                              return _results;
                                            };

                                            Starrr.prototype.setRating = function(rating) {
                                              if (this.options.rating === rating) {
                                                rating = void 0;
                                              }
                                              this.options.rating = rating;
                                              this.syncRating();
                                              return this.$el.trigger('starrr:change', rating);
                                            };

                                            Starrr.prototype.syncRating = function(rating) {
                                              var i, _i, _j, _ref;

                                              rating || (rating = this.options.rating);
                                              if (rating) {
                                                for (i = _i = 0, _ref = rating - 1; 0 <= _ref ? _i <= _ref : _i >= _ref; i = 0 <= _ref ? ++_i : --_i) {
                                                  this.$el.find('span').eq(i).removeClass('glyphicon-star-empty').addClass('glyphicon-star');
                                                }
                                              }
                                              if (rating && rating < 5) {
                                                for (i = _j = rating; rating <= 4 ? _j <= 4 : _j >= 4; i = rating <= 4 ? ++_j : --_j) {
                                                  this.$el.find('span').eq(i).removeClass('glyphicon-star').addClass('glyphicon-star-empty');
                                                }
                                              }
                                              if (!rating) {
                                                return this.$el.find('span').removeClass('glyphicon-star').addClass('glyphicon-star-empty');
                                              }
                                            };

                                            return Starrr;

                                          })();
                                          return $.fn.extend({
                                            starrr: function() {
                                              var args, option;

                                              option = arguments[0], args = 2 <= arguments.length ? __slice.call(arguments, 1) : [];
                                              return this.each(function() {
                                                var data;

                                                data = $(this).data('star-rating');
                                                if (!data) {
                                                  $(this).data('star-rating', (data = new Starrr($(this), option)));
                                                }
                                                if (typeof option === 'string') {
                                                  return data[option].apply(data, args);
                                                }
                                              });
                                            }
                                          });
                                        })(window.jQuery, window);

                                        $(function() {
                                          return $(".starrr").starrr();
                                        });

                                        $( document ).ready(function() {
                                              
                                          $('#hearts').on('starrr:change', function(e, value){
                                            $('#count').html(value);
                                          });
                                          
                                          $('#hearts-existing').on('starrr:change', function(e, value){
                                            $('#count-existing').html(value);
                                          });
                                        });
                                </script>

    
                                </div>
                           
                                  
                                  <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
                                </form>
                            </div>
                        </div>
                        <button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
                    </div>
                </div>
            </div>
          </div>
        </div>
  </div>





    <br>
    <div class="list-group">
      <a href="#" class="list-group-item list-group-item-success">
        <h4 class="list-group-item-heading">Nom de la casa</h4>
        <p class="list-group-item-text">Propietats de la casa</p>
        <p> (llista cases, carregades com a l'index de projects (Laravel))</p>
      </a>
    </div>

    <div class="list-group">
      <a href="#" class="list-group-item list-group-item-success">
        <h4 class="list-group-item-heading">Nom de la casa</h4>
        <p class="list-group-item-text">Propietats de la casa</p>
        <p> (llista cases, carregades com a l'index de projects (Laravel))</p>
      </a>
    </div>

    <div class="list-group">
      <a href="#" class="list-group-item list-group-item-success">
        <h4 class="list-group-item-heading">Nom de la casa</h4>
        <p class="list-group-item-text">Propietats de la casa</p>
        <p> (llista cases, carregades com a l'index de projects (Laravel))</p>
      </a>
    </div>

    <div class="list-group">
      <a href="#" class="list-group-item list-group-item-success">
        <h4 class="list-group-item-heading">Nom de la casa</h4>
        <p class="list-group-item-text">Propietats de la casa</p>
        <p> (llista cases, carregades com a l'index de projects (Laravel))</p>
      </a>
    </div>




</div>




@stop
@section('footer')

@stop


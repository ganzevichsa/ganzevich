<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Семейное дерево Ганзевич</title>

    <!-- Scripts -->
     <!-- <script src="{{ asset('js/app.js') }}" defer></script> -->

    <script src="{{ asset('js/primitives.min.js?5100') }}"></script>



    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/primitives.latest.css?5100') }}" media="screen" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

  <script type='text/javascript'>
    var control;
    var items = [
      @foreach($people as $itemPeople)
          { id: <?php echo $itemPeople->id;?>, parents: [<?php echo $itemPeople->dad;?>,<?php echo $itemPeople->mum;?>], spouses: ["<?php if($itemPeople->gender==1){echo $itemPeople->wife;} elseif($itemPeople->gender==2){echo $itemPeople->husband;}  ?>"], <?php if($itemPeople->lefts != null){ echo "relativeItem:".$itemPeople->lefts.", placementType: primitives.common.AdviserPlacementType.Left,";} ?>  title: "<?php echo $itemPeople->title;?>", groupTitle: "<?php echo $itemPeople->groupTitle;?>",  description: "<?php echo $itemPeople->date_of_birth;?>-<?php echo $itemPeople->date_of_death;?>", image: "photos/<?php echo $itemPeople->logo;?>", itemTitleColor: "<?php if($itemPeople->gender == 1){ echo "#c8e4fb";} else {echo "#ffc0cb";}?>"  },
      @endforeach
        ]

    var annotations = [

    ];

    document.addEventListener('DOMContentLoaded', function () {
      var options = new primitives.famdiagram.Config();

      options.pageFitMode = primitives.common.PageFitMode.None;
      options.items = items;
      options.annotations = annotations;
      options.cursorItem = 2;
      options.linesWidth = 1;
      options.linesColor = "black";
      options.hasSelectorCheckbox = primitives.common.Enabled.False;
      options.normalLevelShift = 20;
      options.dotLevelShift = 20;
      options.lineLevelShift = 20;
      options.normalItemsInterval = 10;
      options.dotItemsInterval = 10;
      options.lineItemsInterval = 10;
      options.arrowsDirection = primitives.common.GroupByType.Parents;
      options.showExtraArrows = false;
      options.Size = (100, 100);
      options.onCursorChanged = function (e, data) {
          document.getElementById("message").innerHTML = window.open('people/' + data.context.id, "myWindow", "width=400,height=600");
      };

      control = primitives.famdiagram.Control(document.getElementById("basicdiagram"), options);
    });
  </script>

</head>
<body>
      @yield('content')
    <div class="menu">
        <nav class="menu__nav">
            <ul class="r-list menu__list">
              <li class="menu__group">
                <a href="#" class="r-link menu__link">{{ Auth::user()->name }}</a>
              </li>
              <li class="menu__group">
                <a href="/home" class="r-link menu__link">Главная</a>
              </li>
                <li class="menu__group">
                    <a href="/home/addpeople" class="r-link menu__link">Добавить первого человека</a>
                </li>
             <!--  <li class="menu__group">
                <a href="#0" class="r-link menu__link">Аудио</a>
              </li>
              <li class="menu__group">
                <a href="#0" class="r-link menu__link">Фильмы</a>
              </li> -->
              <li class="menu__group">
                <a href="{{ route('logout') }} class="r-link menu__link" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
              </li>
            </ul>
        </nav>
        <div class="menu__toggle">
            <button class="r-button menu__hamburger">
                <span class="m-hamburger">
                <span class="m-hamburger__label">Open menu</span>
                </span>
            </button>
        </div>
    </div>
<script type="text/javascript">
    (function(){
  'use strict';

  class Menu {
    constructor(settings) {
      this.menuNode = settings.menuNode;
    }

    toggleMenuState(className) {
      if (typeof className !== 'string' || className.length === 0) {
        return console.log('you did not give the class for toggleState function');
      }
      return  this.menuNode.classList.toggle(className);
    }
  }

  const jsMenuNode = document.querySelector('.menu');
  const demoMenu = new Menu ({
    menuNode: jsMenuNode
  });

  function callMenuToggle(event) {
    demoMenu.toggleMenuState('menu_activated');
  }

  jsMenuNode.querySelector('.menu__hamburger').addEventListener('click', callMenuToggle);
})();
</script>
</body>
</html>

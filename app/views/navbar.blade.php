<div class="navbar-inner">
 <ul class="nav navbar-nav">

         <li>
        {{link_to('/add', $title="Добавить контакт", $attributes = array('class'=>'active', 'role' => 'button'))}}
        </li> 
        <li>
        {{link_to('/list', $title="Список контактов", $attributes = array('class'=>'active', 'role' => 'button'))}}
        </li>
        
<!--
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Добавить новость <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="/add/common">В общий канал</a></li>
            <li><a href="/add/person">В личный канал</a></li>
            <li role="" class="divider"></li>
            <li><a href="add/admin">В канал администратора</a></li>
          </ul>
        </li>
-->
      </ul>
</div>
<li class="{{ Request::is('homepage*') ? 'active' : '' }}">
    <a href="{{ url('homepage') }}">
        <i class="fa fa-dashboard"></i>
        <span>Painel de Controle</span>
    </a>
</li>
<li class=" {{ Request::is('avaliacaoTerapeutica*') ? 'active' : '' }} treeview">

    <a href="#"><i class="fa fa-link"></i> <span>Cadastro</span>
        <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
        </span>
    </a>

    <ul class="treeview-menu">
        <li class="{{ Request::is('avaliacaoTerapeutica*') ? 'active' : '' }}">
            <a href="{{ url('avaliacaoTerapeutica') }}"><i class="fa fa-eye"></i><span>Avaliação Terapêutica</span></a>
        </li>
    </a>
    </ul>
</li>
<li class="{{ Request::is('avaliacoes*') || Request::is('power_breath*') || Request::is('dourado*') ? 'active' : '' }} treeview">
    <a href="#">
        <i class="fa fa-file-pdf-o"></i>
        <span>Avaliações</span>
        <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
        </span>
    </a>
    <ul class="treeview-menu">
        <li class="{{ Request::is('avaliacoes*') ? 'active' : '' }}">
            <a href="{{ url('avaliacoes') }}">
                <i class="fa fa-eye"></i>
                <span>Cronograma Avaliações e Reavaliações</span>
            </a>
        </li>
        <li class="{{ Request::is('power_breath*') ? 'active' : '' }}">
            <a href="{{ url('power_breath') }}">
                <i class="fa fa-eye"></i>
                <span>Power Breathe</span>
            </a>
        </li>
        <li class="{{ Request::is('dourado*') ? 'active' : '' }}">
            <a href="{{ url('dourado') }}">
                <i class="fa fa-eye"></i>
                <span>Valor predito do teste de caminhada pela equação de DOURADO</span>
            </a>
        </li>
    </ul>
</li>

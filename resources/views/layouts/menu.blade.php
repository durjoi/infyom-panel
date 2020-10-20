<li class=" {{ Request::is('ras*') ||
Request::is('bairros*') ||
Request::is('logradouroTipos*') ||
Request::is('logradouros*') ||
Request::is('postes*') ||
Request::is('suportes*') ||
Request::is('luminarias*') ||
Request::is('lampadas*') ||
Request::is('reators*') ||
Request::is('reles*') ||
Request::is('redes*') ||
Request::is('transformadors*') ||
Request::is('medidors*') ||
Request::is('objetoIluminados*') ||
Request::is('tarifas*') ||
Request::is('bases*') ||
Request::is('iluminacaoPublicas*') ? 'active' : '' }} treeview">
    <!-- <a href="#"><i class="fa fa-link"></i> <span>Cadastro</span> -->
    <a href="#"><i class="fa fa-link"></i> <span>Cadastro</span>
        <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
        </span>
    </a>

    <ul class="treeview-menu">
        <!-- <li class="{{ Request::is('ras*') ? 'active' : '' }}">
            <a href="{{ route('ras.index') }}"><i class="fa fa-edit"></i><span>Região Adm</span></a>
        </li>
        <li class="{{ Request::is('bairros*') ? 'active' : '' }}">
            <a href="{{ route('bairros.index') }}"><i class="fa fa-edit"></i><span>Bairro</span></a>
        </li>
        <li class="{{ Request::is('logradouroTipos*') ? 'active' : '' }}">
            <a href="{{ route('logradouroTipos.index') }}"><i class="fa fa-edit"></i><span>Tipo Logradouro</span></a>
        </li>
        <li class="{{ Request::is('logradouros*') ? 'active' : '' }}">
            <a href="{{ route('logradouros.index') }}"><i class="fa fa-edit"></i><span>Logradouro</span></a>
        </li>
        <li class="{{ Request::is('postes*') ? 'active' : '' }}">
            <a href="{{ route('postes.index') }}"><i class="fa fa-edit"></i><span>Poste</span></a>
        </li>

        <li class="{{ Request::is('suportes*') ? 'active' : '' }}">
            <a href="{{ route('suportes.index') }}"><i class="fa fa-edit"></i><span>Suporte</span></a>
        </li>

        <li class="{{ Request::is('luminarias*') ? 'active' : '' }}">
            <a href="{{ route('luminarias.index') }}"><i class="fa fa-edit"></i><span>Luminária</span></a>
        </li>

        <li class="{{ Request::is('lampadas*') ? 'active' : '' }}">
            <a href="{{ route('lampadas.index') }}"><i class="fa fa-edit"></i><span>Lâmpada</span></a>
        </li>

        <li class="{{ Request::is('reators*') ? 'active' : '' }}">
            <a href="{{ route('reators.index') }}"><i class="fa fa-edit"></i><span>Reator</span></a>
        </li>

        <li class="{{ Request::is('reles*') ? 'active' : '' }}">
            <a href="{{ route('reles.index') }}"><i class="fa fa-edit"></i><span>Relé</span></a>
        </li>

        <li class="{{ Request::is('redes*') ? 'active' : '' }}">
            <a href="{{ route('redes.index') }}"><i class="fa fa-edit"></i><span>Rede</span></a>
        </li>
        <li class="{{ Request::is('bases*') ? 'active' : '' }}">
            <a href="{{ route('bases.index') }}"><i class="fa fa-edit"></i><span>@lang('models/bases.singular')</span></a>
        </li>
        <li class="{{ Request::is('transformadors*') ? 'active' : '' }}">
            <a href="{{ route('transformadors.index') }}"><i class="fa fa-edit"></i><span>Transformador</span></a>
        </li>

        <li class="{{ Request::is('medidors*') ? 'active' : '' }}">
            <a href="{{ route('medidors.index') }}"><i class="fa fa-edit"></i><span>Medidor</span></a>
        </li>

        <li class="{{ Request::is('objetoIluminados*') ? 'active' : '' }}">
            <a href="{{ route('objetoIluminados.index') }}"><i class="fa fa-edit"></i><span>Objeto Iluminado</span></a>
        </li>

        <li class="{{ Request::is('tarifas*') ? 'active' : '' }}">
            <a href="{{ route('tarifas.index') }}"><i class="fa fa-edit"></i><span>Tarifa</span></a>
        </li> -->

        <!-- <li class="{{ Request::is('iluminacaoPublicas*') ? 'active' : '' }}">
            <a href="{{ route('iluminacaoPublicas.index') }}"><i class="fa fa-edit"></i><span>Avaliação Terapêutica</span></a>
        </li> -->
        <li class="{{ Request::is('avaliacaoTerapeutica*') ? 'active' : '' }}">
            <a href="{{ url('avaliacaoTerapeutica') }}"><i class="fa fa-eye"></i><span>Avaliação Terapêutica</span></a>
        </li>
    </a>
    </ul>
</li>

<!-- <li class="{{ Request::is('faturaManutencaos*') ||
Request::is('faturaManutencaos*') ||
Request::is('faturaManutencaos*') ||
Request::is('faturaManutencaos*') ||
Request::is('faturaManutencaos*') ||
Request::is('faturaManutencaos*') ||
Request::is('faturaManutencaos*') ||
Request::is('defeitosEncontrados*') ||
Request::is('causaDefeitos*') ||
Request::is('tipoSolicitacaos*') ||
Request::is('tipoSolicitantes*') ||
Request::is('origemSolicitacaos*') ||
Request::is('faturaManutencaos*') ||
Request::is('ordemDeServicos*') ||
Request::is('faturaManutencaos*') ? 'active' : '' }} treeview">
    <a href="#"><i class="fa fa-link"></i> <span>Manutenção</span>
        <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
        </span>
    </a>
    <ul class="treeview-menu">
        <li class="{{ Request::is('ordemDeServicos*') ? 'active' : '' }}">
            <a href="{{ route('ordemDeServicos.index') }}"><i class="fa fa-edit"></i><span>Ordem de Serviço</span></a>
        </li>
        <li class="{{ Request::is('defeitosEncontrados*') ? 'active' : '' }}">
            <a href="{{ route('defeitosEncontrados.index') }}"><i class="fa fa-edit"></i><span>Defeito Encontrado</span></a>
        </li>
        <li class="{{ Request::is('causaDefeitos*') ? 'active' : '' }}">
            <a href="{{ route('causaDefeitos.index') }}"><i class="fa fa-edit"></i><span>Causas de Defeitos</span></a>
        </li>
        <li class="{{ Request::is('tipoSolicitacaos*') ? 'active' : '' }}">
            <a href="{{ route('tipoSolicitacaos.index') }}"><i class="fa fa-edit"></i><span>Tipo de Solicitação</span></a>
        </li>
        <li class="{{ Request::is('tipoSolicitantes*') ? 'active' : '' }}">
            <a href="{{ route('tipoSolicitantes.index') }}"><i class="fa fa-edit"></i><span>Tipo Solicitantes</span></a>
        </li>
        <li class="{{ Request::is('origemSolicitacaos*') ? 'active' : '' }}">
            <a href="{{ route('origemSolicitacaos.index') }}"><i class="fa fa-edit"></i><span>Origem Solicitações</span></a>
        </li>
        <li class="{{ Request::is('faturaManutencaos*') ? 'active' : '' }}">
            <a href="{{ route('faturaManutencaos.index') }}"><i class="fa fa-edit"></i><span>Ordem Serv - Fatura Manutenção</span></a>
        </li>
    </ul>
</li>

<li class="{{ Request::is('obras*') ||
Request::is('faturaObras*') ||
Request::is('tipoacaos*') ||
Request::is('obrasOrcamentos*') ? 'active' : '' }} treeview">
    <a href="#"><i class="fa fa-link"></i> <span>Obras</span>
        <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
        </span>
    </a>

    <ul class="treeview-menu">

        <li class="{{ Request::is('obras*') ? 'active' : '' }}">
            <a href="{{ route('obras.index') }}"><i class="fa fa-edit"></i><span>Obra</span></a>
        </li>
        <li class="{{ Request::is('faturaObras*') ? 'active' : '' }}">
            <a href="{{ route('faturaObras.index') }}"><i class="fa fa-edit"></i><span>Faturamento</span></a>
        </li>
        <li class="{{ Request::is('tipoacaos*') ? 'active' : '' }}">
            <a href="{{ route('tipoacaos.index') }}"><i class="fa fa-edit"></i><span>Tipo da Ação</span></a>
        </li>
        <li class="{{ Request::is('obrasOrcamentos*') ? 'active' : '' }}">
            <a href="{{ route('obrasOrcamentos.index') }}"><i class="fa fa-edit"></i><span>Imprimir Orçamentos</span></a>
        </li>
    </ul>
</li>

<li class="{{ Request::is('eventos*') ||
Request::is('faturaEventos*') ||
Request::is('eventosOrcamentos*') ? 'active' : '' }} treeview">
    <a href="#"><i class="fa fa-link"></i> <span>Eventos</span>
        <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
        </span>
    </a>

    <ul class="treeview-menu">

        <li class="{{ Request::is('eventos*') ? 'active' : '' }}">
            <a href="{{ route('eventos.index') }}"><i class="fa fa-edit"></i><span>Gestão de Eventos</span></a>
        </li>
        <li class="{{ Request::is('faturaEventos*') ? 'active' : '' }}">
            <a href="{{ route('faturaEventos.index') }}"><i class="fa fa-edit"></i><span>Faturamento</span></a>
        </li>
        <li class="{{ Request::is('eventosOrcamentos*') ? 'active' : '' }}">
            <a href="{{ route('eventosOrcamentos.index') }}"><i class="fa fa-edit"></i><span>Imprimir Orçamentos</span></a>
        </li>
    </ul>
</li>

<li class="{{ Request::is('estoqueEpiEpcFerramentals*') ||
Request::is('estoqueEntradas*') ||
Request::is('estoqueSaidas*') ||
Request::is('estoqueEpiEpcFerramentals*') ||
Request::is('estoqueEpiEpcFerramentals*') ||
Request::is('estoqueEpiEpcFerramentals*') ||
Request::is('estoqueEpiEpcFerramentals*') ||
Request::is('estoqueEpiEpcFerramentals*') ||
Request::is('estoqueEpiEpcFerramentals*') ||
Request::is('fabricantes*') ||
Request::is('fornecedors*') ||
Request::is('marcas*') ||
Request::is('obrasEstoques*') ||
Request::is('operacaos*') ||
Request::is('aplicacaos*') ||
Request::is('pedidos*') ||
Request::is('requisicaos*') ||
Request::is('pedidoCabecalhos*') ? 'active' : '' }} treeview">
    <a href="#"><i class="fa fa-link"></i> <span>Estoque</span>
        <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
        </span>
    </a>

    <ul class="treeview-menu">
        <li class="{{ Request::is('requisicaos*') ? 'active' : '' }}">
            <a href="{{ route('requisicaos.index') }}"><i class="fa fa-edit"></i><span>Requisição</span></a>
        </li>
        <li class="{{ Request::is('estoqueEntradas*') ? 'active' : '' }}">
            <a href="{{ route('estoqueEntradas.index') }}"><i class="fa fa-edit"></i><span>Entrada de Material</span></a>
        </li>
        <li class="{{ Request::is('estoqueSaidas*') ? 'active' : '' }}">
            <a href="{{ route('estoqueSaidas.index') }}"><i class="fa fa-edit"></i><span>Requisição Material - Saída</span></a>
        </li>
        <li class="{{ Request::is('estoqueEpiEpcFerramentals*') ? 'active' : '' }}">
            <a href="{{ route('estoqueEpiEpcFerramentals.index') }}"><i class="fa fa-edit"></i><span>Req. Mat - EPI/EPC - Entreg/Devolv</span></a>
        </li>
        <li class="{{ Request::is('fabricantes*') ? 'active' : '' }}">
            <a href="{{ route('fabricantes.index') }}"><i class="fa fa-edit"></i><span>Fabricante</span></a>
        </li>
        <li class="{{ Request::is('fornecedors*') ? 'active' : '' }}">
            <a href="{{ route('fornecedors.index') }}"><i class="fa fa-edit"></i><span>Fornecedor</span></a>
        </li>
        <li class="{{ Request::is('marcas*') ? 'active' : '' }}">
            <a href="{{ route('marcas.index') }}"><i class="fa fa-edit"></i><span>Marca</span></a>
        </li>
        <li class="{{ Request::is('obrasEstoques*') ? 'active' : '' }}">
            <a href="{{ route('obrasEstoques.index') }}"><i class="fa fa-edit"></i><span>Obras Estoques</span></a>
        </li>
        <li class="{{ Request::is('operacaos*') ? 'active' : '' }}">
            <a href="{{ route('operacaos.index') }}"><i class="fa fa-edit"></i><span>Operação</span></a>
        </li>
        <li class="{{ Request::is('aplicacaos*') ? 'active' : '' }}">
            <a href="{{ route('aplicacaos.index') }}"><i class="fa fa-edit"></i><span>Aplicação</span></a>
        </li>
        <li class="{{ Request::is('pedidos*') ? 'active' : '' }}">
            <a href="{{ route('pedidos.index') }}"><i class="fa fa-edit"></i><span>Pedido de Material - Pedido</span></a>
        </li>
        <li class="{{ Request::is('pedidoCabecalhos*') ? 'active' : '' }}">
            <a href="{{ route('pedidoCabecalhos.index') }}"><i class="fa fa-edit"></i><span>Pedido de Material - Cabeçalho</span></a>
        </li>
    </ul>
</li>

<li class="{{ Request::is('contratos*') ||
Request::is('contratoItens*') ? 'active' : '' }} treeview">
    <a href="#"><i class="fa fa-link"></i> <span>Ferramentas</span>
        <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
        </span>
    </a>

    <ul class="treeview-menu">

        <li class="{{ Request::is('contratos*') ? 'active' : '' }}">
            <a href="{{ route('contratos.index') }}"><i class="fa fa-edit"></i><span>Gestão de Contrato - Contrato</span></a>
        </li>
        <li class="{{ Request::is('contratoItens*') ? 'active' : '' }}">
            <a href="{{ route('contratoItens.index') }}"><i class="fa fa-edit"></i><span>Gestão de Contrato - Itens</span></a>
        </li>
    </ul>
</li>

<li class="{{ Request::is('activityLogs*') ? 'active' : '' }} treeview">
    <a href="#"><i class="fa fa-link"></i> <span>Log</span>
        <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
        </span>
    </a>

    <ul class="treeview-menu">

        <li class="{{ Request::is('activityLogs*') ? 'active' : '' }}">
            <a href="{{ route('activityLogs.index') }}"><i class="fa fa-edit"></i><span>Log de atividades</span></a>
        </li>

    </ul>
</li>

<li class="{{ Request::is('cidades*') ||
Request::is('ipcontaip10s*') ||
Request::is('ipcontaip11s*') ||
Request::is('ipcontaip12s*') ||
Request::is('ipcontaip13s*') ||
Request::is('ipcontaip14s*') ||
Request::is('ipcontaip14Dadosfaturas*') ||
Request::is('ipcontaipEstimadas*') ||
Request::is('ipcontaipMedidas*') ||
Request::is('ipcontaipSecretarias*') ||
Request::is('meses*') ||
Request::is('obrasBaixaIps*') ||
Request::is('obrasBaixaIpAnteriors*') ||
Request::is('sequencials*') ||
Request::is('subestacaos*') ||
Request::is('veiculos*') ||
Request::is('veiculosMovimentacaos*') ||
Request::is('veiculosServicos*') ||
Request::is('faturaManutencaoOs*') ||
Request::is('obrasSolicitantes*') ||
Request::is('funcips*') ||
Request::is('faturaObrasOs*') ||
Request::is('faturaEventosOs*') ||
Request::is('estoqueEntradasProdutos*') ||
Request::is('solicitacaoMaterials*') ||
Request::is('pedidoProdutos*') ||
Request::is('estoqueEpiEpcFerramentalProdutos*') ||
Request::is('solicitacaoMaterialItens*') ||
Request::is('contratoItensAjustes*') ||
Request::is('respostas*') ||
Request::is('respostasMensagemDiarias*') ||
Request::is('respostasUsuarios*') ||
Request::is('mensagems*') ||
Request::is('solicitacaoReclamacaos*') ||
Request::is('solicitacaoReclamacaoSolicitantes*') ||
Request::is('clientes*') ||
Request::is('controleHistoricos*') ||
Request::is('controleMotivos*') ||
Request::is('digitacaoCadastros*') ||
Request::is('usuarios*') ||
Request::is('unidades*') ||
Request::is('turmas*') ||
Request::is('empresas*') ||
Request::is('empregados*') ||
Request::is('usuarioCidades*') ||
Request::is('datosDoUsuarios*') ||
Request::is('perfils*') ||
Request::is('perfilCadastros*') ||
Request::is('estoqueEpiEpcFerramentals*') ? 'active' : '' }} treeview">
    <a href="#"><i class="fa fa-link"></i> <span>Master</span>
        <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
        </span>
    </a>

    <ul class="treeview-menu">

        <li class="{{ Request::is('cidades*') ? 'active' : '' }}">
            <a href="{{ route('cidades.index') }}"><i class="fa fa-edit"></i><span>Cidades</span></a>
        </li>
        <li class="{{ Request::is('ipcontaip10s*') ? 'active' : '' }}">
            <a href="{{ route('ipcontaip10s.index') }}"><i class="fa fa-edit"></i><span>Ip Conta Ip 10S</span></a>
        </li>

        <li class="{{ Request::is('ipcontaip11s*') ? 'active' : '' }}">
            <a href="{{ route('ipcontaip11s.index') }}"><i class="fa fa-edit"></i><span>Ip Conta Ip 11S</span></a>
        </li>

        <li class="{{ Request::is('ipcontaip12s*') ? 'active' : '' }}">
            <a href="{{ route('ipcontaip12s.index') }}"><i class="fa fa-edit"></i><span>Ip Conta Ip 12S</span></a>
        </li>

        <li class="{{ Request::is('ipcontaip13s*') ? 'active' : '' }}">
            <a href="{{ route('ipcontaip13s.index') }}"><i class="fa fa-edit"></i><span>Ip Conta Ip 13S</span></a>
        </li>

        <li class="{{ Request::is('ipcontaip14s*') ? 'active' : '' }}">
            <a href="{{ route('ipcontaip14s.index') }}"><i class="fa fa-edit"></i><span>Ip Conta Ip 14S</span></a>
        </li>

        <li class="{{ Request::is('ipcontaip14Dadosfaturas*') ? 'active' : '' }}">
            <a href="{{ route('ipcontaip14Dadosfaturas.index') }}"><i class="fa fa-edit"></i><span>Ip Conta Ip 14 Dadosfaturas</span></a>
        </li>

        <li class="{{ Request::is('ipcontaipEstimadas*') ? 'active' : '' }}">
            <a href="{{ route('ipcontaipEstimadas.index') }}"><i class="fa fa-edit"></i><span>Ip Conta Ip Estimadas</span></a>
        </li>

        <li class="{{ Request::is('ipcontaipMedidas*') ? 'active' : '' }}">
            <a href="{{ route('ipcontaipMedidas.index') }}"><i class="fa fa-edit"></i><span>Ip Conta Ip Medidas</span></a>
        </li>

        <li class="{{ Request::is('ipcontaipSecretarias*') ? 'active' : '' }}">
            <a href="{{ route('ipcontaipSecretarias.index') }}"><i class="fa fa-edit"></i><span>Ip Conta Ip Secretarias</span></a>
        </li>

        <li class="{{ Request::is('meses*') ? 'active' : '' }}">
            <a href="{{ route('meses.index') }}"><i class="fa fa-edit"></i><span>Meses</span></a>
        </li>

        <li class="{{ Request::is('obrasBaixaIps*') ? 'active' : '' }}">
            <a href="{{ route('obrasBaixaIps.index') }}"><i class="fa fa-edit"></i><span>Obras Baixa Ips</span></a>
        </li>

        <li class="{{ Request::is('obrasBaixaIpAnteriors*') ? 'active' : '' }}">
            <a href="{{ route('obrasBaixaIpAnteriors.index') }}"><i class="fa fa-edit"></i><span>Obras Baixa Ip Anteriores</span></a>
        </li>

        <li class="{{ Request::is('sequencials*') ? 'active' : '' }}">
            <a href="{{ route('sequencials.index') }}"><i class="fa fa-edit"></i><span>Sequenciais</span></a>
        </li>

        <li class="{{ Request::is('subestacaos*') ? 'active' : '' }}">
            <a href="{{ route('subestacaos.index') }}"><i class="fa fa-edit"></i><span>Subestações</span></a>
        </li>

        <li class="{{ Request::is('veiculos*') ? 'active' : '' }}">
            <a href="{{ route('veiculos.index') }}"><i class="fa fa-edit"></i><span>Veículos</span></a>
        </li>

        <li class="{{ Request::is('veiculosMovimentacaos*') ? 'active' : '' }}">
            <a href="{{ route('veiculosMovimentacaos.index') }}"><i class="fa fa-edit"></i><span>Veículos Movimentações</span></a>
        </li>

        <li class="{{ Request::is('veiculosServicos*') ? 'active' : '' }}">
            <a href="{{ route('veiculosServicos.index') }}"><i class="fa fa-edit"></i><span>Veículos Serviços</span></a>
        </li>

        <li class="{{ Request::is('faturaManutencaoOs*') ? 'active' : '' }}">
            <a href="{{ route('faturaManutencaoOs.index') }}"><i class="fa fa-edit"></i><span>Ordem Serv - Fatura Manutenção 2</span></a>
        </li>
        <li class="{{ Request::is('obrasSolicitantes*') ? 'active' : '' }}">
            <a href="{{ route('obrasSolicitantes.index') }}"><i class="fa fa-edit"></i><span>Obras Solicitantes (ANALISAR)</span></a>
        </li>
        <li class="{{ Request::is('funcips*') ? 'active' : '' }}">
            <a href="{{ route('funcips.index') }}"><i class="fa fa-edit"></i><span>Funcip (ANALISAR)</span></a>
        </li>
        <li class="{{ Request::is('faturaObrasOs*') ? 'active' : '' }}">
            <a href="{{ route('faturaObrasOs.index') }}"><i class="fa fa-edit"></i><span>Fatura Obras Os (ANALISAR)</span></a>
        </li>
        <li class="{{ Request::is('faturaEventosOs*') ? 'active' : '' }}">
            <a href="{{ route('faturaEventosOs.index') }}"><i class="fa fa-edit"></i><span>Fatura Eventos Os (ANALISAR)</span></a>
        </li>
        <li class="{{ Request::is('estoqueEntradasProdutos*') ? 'active' : '' }}">
            <a href="{{ route('estoqueEntradasProdutos.index') }}"><i class="fa fa-edit"></i><span>Estoque Entrada Produtos (ANALISAR)</span></a>
        </li>
        <li class="{{ Request::is('solicitacaoMaterials*') ? 'active' : '' }}">
            <a href="{{ route('solicitacaoMaterials.index') }}"><i class="fa fa-edit"></i><span>Solicitação Materiais (ANALISAR)</span></a>
        </li>
        <li class="{{ Request::is('pedidoProdutos*') ? 'active' : '' }}">
            <a href="{{ route('pedidoProdutos.index') }}"><i class="fa fa-edit"></i><span>Pedido Produtos (ANALISAR)</span></a>
        </li>
        <li class="{{ Request::is('estoqueEpiEpcFerramentalProdutos*') ? 'active' : '' }}">
            <a href="{{ route('estoqueEpiEpcFerramentalProdutos.index') }}"><i class="fa fa-edit"></i><span>Estoque Epi Epc Ferramental Produtos (ANALISAR)</span></a>
        </li>
        <li class="{{ Request::is('solicitacaoMaterialItens*') ? 'active' : '' }}">
            <a href="{{ route('solicitacaoMaterialItens.index') }}"><i class="fa fa-edit"></i><span>Solicitação Material Itens (ANALISAR)</span></a>
        </li>
        <li class="{{ Request::is('contratoItensAjustes*') ? 'active' : '' }}">
            <a href="{{ route('contratoItensAjustes.index') }}"><i class="fa fa-edit"></i><span>Ajustes no Contrato dos Itens (ANALISAR)</span></a>
        </li>
        <li class="{{ Request::is('respostas*') ? 'active' : '' }}">
            <a href="{{ route('respostas.index') }}"><i class="fa fa-edit"></i><span>Respostas (ANALISAR)</span></a>
        </li>
        <li class="{{ Request::is('respostasMensagemDiarias*') ? 'active' : '' }}">
            <a href="{{ route('respostasMensagemDiarias.index') }}"><i class="fa fa-edit"></i><span>Respostas Mensagens Diárias (ANALISAR)</span></a>
        </li>
        <li class="{{ Request::is('respostasUsuarios*') ? 'active' : '' }}">
            <a href="{{ route('respostasUsuarios.index') }}"><i class="fa fa-edit"></i><span>Respostas Usuários (ANALISAR)</span></a>
        </li>
        <li class="{{ Request::is('mensagems*') ? 'active' : '' }}">
            <a href="{{ route('mensagems.index') }}"><i class="fa fa-edit"></i><span>Gestão de Comunicação - Envio de Mensagem</span></a>
        </li>
        <li class="{{ Request::is('solicitacaoReclamacaos*') ? 'active' : '' }}">
            <a href="{{ route('solicitacaoReclamacaos.index') }}"><i class="fa fa-edit"></i><span>Solicitação Reclamações (ANALISAR)</span></a>
        </li>
        <li class="{{ Request::is('solicitacaoReclamacaoSolicitantes*') ? 'active' : '' }}">
            <a href="{{ route('solicitacaoReclamacaoSolicitantes.index') }}"><i class="fa fa-edit"></i><span>Solicitação Reclamação Solicitantes (ANALISAR)</span></a>
        </li>
        <li class="{{ Request::is('clientes*') ? 'active' : '' }}">
            <a href="{{ route('clientes.index') }}"><i class="fa fa-edit"></i><span>Clientes (ANALISAR)</span></a>
        </li>
        <li class="{{ Request::is('controleHistoricos*') ? 'active' : '' }}">
            <a href="{{ route('controleHistoricos.index') }}"><i class="fa fa-edit"></i><span>Controle Históricos (ANALISAR)</span></a>
        </li>
        <li class="{{ Request::is('controleMotivos*') ? 'active' : '' }}">
            <a href="{{ route('controleMotivos.index') }}"><i class="fa fa-edit"></i><span>Controle Motivos (ANALISAR)</span></a>
        </li>
        <li class="{{ Request::is('digitacaoCadastros*') ? 'active' : '' }}">
            <a href="{{ route('digitacaoCadastros.index') }}"><i class="fa fa-edit"></i><span>Digitação Cadastros (ANALISAR)</span></a>
        </li>

        <li class="{{ Request::is('usuarios*') ? 'active' : '' }}">
            <a href="{{ route('usuarios.index') }}"><i class="fa fa-edit"></i><span>Gestão de Usuários</span></a>
        </li>
        <li class="{{ Request::is('unidades*') ? 'active' : '' }}">
            <a href="{{ route('unidades.index') }}"><i class="fa fa-edit"></i><span>Unidade</span></a>
        </li>
        <li class="{{ Request::is('turmas*') ? 'active' : '' }}">
            <a href="{{ route('turmas.index') }}"><i class="fa fa-edit"></i><span>Turma</span></a>
        </li>
        <li class="{{ Request::is('empresas*') ? 'active' : '' }}">
            <a href="{{ route('empresas.index') }}"><i class="fa fa-edit"></i><span>Empresas</span></a>
        </li>
        <li class="{{ Request::is('empregados*') ? 'active' : '' }}">
            <a href="{{ route('empregados.index') }}"><i class="fa fa-edit"></i><span>Empregados</span></a>
        </li>
        <li class="{{ Request::is('usuarioCidades*') ? 'active' : '' }}">
            <a href="{{ route('usuarioCidades.index') }}"><i class="fa fa-edit"></i><span>Usuário Cidades (ANALISAR)</span></a>
        </li>
        <li class="{{ Request::is('datosDoUsuarios*') ? 'active' : '' }}">
            <a href="{{ route('datosDoUsuarios.index') }}"><i class="fa fa-edit"></i><span>Dados Dos Usuários (ANALISAR)</span></a>
        </li>
        <li class="{{ Request::is('perfils*') ? 'active' : '' }}">
            <a href="{{ route('perfils.index') }}"><i class="fa fa-edit"></i><span>Perfis (ANALISAR)</span></a>
        </li>

        <li class="{{ Request::is('perfilCadastros*') ? 'active' : '' }}">
            <a href="{{ route('perfilCadastros.index') }}"><i class="fa fa-edit"></i><span>Perfil Cadastros (ANALISAR)</span></a>
        </li>

    </ul>
</li>
<li class="{{ Request::is('acompanhamentoObras*') ? 'active' : '' }}">
    <a href="{{ route('acompanhamentoObras.index') }}"><i class="fa fa-edit"></i><span>@lang('models/acompanhamentoObras.plural')</span></a>
</li>

<li class="{{ Request::is('ordemDeServicoManutencaos*') ? 'active' : '' }}">
    <a href="{{ route('ordemDeServicoManutencaos.index') }}"><i class="fa fa-edit"></i><span>@lang('models/ordemDeServicoManutencaos.singular')</span></a>
</li>

<li class="{{ Request::is('pedidoMaterials*') ? 'active' : '' }}">
    <a href="{{ route('pedidoMaterials.index') }}"><i class="fa fa-edit"></i><span>@lang('models/pedidoMaterials.singular')</span></a>
</li> -->

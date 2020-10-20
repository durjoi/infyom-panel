<?php

// Home

use Illuminate\Support\Str;

Breadcrumbs::for('home', function ($trail) {
    $trail->push('Home', route('home'));
});

Breadcrumbs::macro('resource', function ($name, $title) {
    // Home > Blog
    Breadcrumbs::for("$name.index", function ($trail) use ($name, $title) {
        $trail->parent('home');
        $trail->push($title, route("$name.index"));
    });

    // Home > Blog > New
    Breadcrumbs::for("$name.create", function ($trail) use ($name) {
        $trail->parent("$name.index");
        $trail->push('Cadastrar', route("$name.create"));
    });

    // Home > Blog > Post 123
    Breadcrumbs::for("$name.show", function ($trail, $model) use ($name) {
        $trail->parent("$name.index");
        $trail->push($model->id, route("$name.show", $model));
    });

    // Home > Blog > Post 123 > Edit
    Breadcrumbs::for("$name.edit", function ($trail, $model) use ($name) {
        $trail->parent("$name.show", $model);
        $trail->push('Editar', route("$name.edit", $model));
    });
});


Breadcrumbs::resource('pedidoMaterials', __('models/pedidoMaterials.plural'));
Breadcrumbs::resource('pedidoMaterialItems', __('models/pedidoMaterialItems.plural'));
Breadcrumbs::resource('itensOs', __('models/itensOs.plural'));
Breadcrumbs::resource('ordemDeServicoManutencaos', __('models/ordemDeServicoManutencaos.plural'));
Breadcrumbs::resource('bases', __('models/bases.plural'));
Breadcrumbs::resource('acompanhamentoObras', __('models/acompanhamentoObras.plural'));
Breadcrumbs::resource('pontos', __('models/pontos.plural'));
Breadcrumbs::resource('ordemDeServicos', __('models/ordemDeServicos.plural'));
Breadcrumbs::resource('activityLogs', __('models/activityLogs.plural'));
Breadcrumbs::resource('items', __('models/items.plural'));
Breadcrumbs::resource('requisicaos', __('models/requisicaos.plural'));
Breadcrumbs::resource('cidades', __('models/cidades.plural'));
Breadcrumbs::resource('datosDoUsuarios', __('models/datosDoUsuarios.plural'));
Breadcrumbs::resource('bairros', __('models/bairros.plural'));
Breadcrumbs::resource('aplicacaos', __('models/aplicacaos.plural'));
Breadcrumbs::resource('causaDefeitos', __('models/causaDefeitos.plural'));
Breadcrumbs::resource('clientes', __('models/clientes.plural'));
Breadcrumbs::resource('contratos', __('models/contratos.plural'));
Breadcrumbs::resource('contratoItens', __('models/contratoItens.plural'));
Breadcrumbs::resource('contratoItensAjustes', __('models/contratoItensAjustes.plural'));
Breadcrumbs::resource('controleHistoricos', __('models/controleHistoricos.plural'));
Breadcrumbs::resource('controleMotivos', __('models/controleMotivos.plural'));
Breadcrumbs::resource('defeitosEncontrados', __('models/defeitosEncontrados.plural'));
Breadcrumbs::resource('digitacaoCadastros', __('models/digitacaoCadastros.plural'));
Breadcrumbs::resource('empregados', __('models/empregados.plural'));
Breadcrumbs::resource('empresas', __('models/empresas.plural'));
Breadcrumbs::resource('estoqueEntradas', __('models/estoqueEntradas.plural'));
Breadcrumbs::resource('estoqueEntradasProdutos', __('models/estoqueEntradasProdutos.plural'));
Breadcrumbs::resource('estoqueEpiEpcFerramentals', __('models/estoqueEpiEpcFerramentals.plural'));
Breadcrumbs::resource('estoqueEpiEpcFerramentalProdutos', __('models/estoqueEpiEpcFerramentalProdutos.plural'));
Breadcrumbs::resource('estoqueSaidas', __('models/estoqueSaidas.plural'));
Breadcrumbs::resource('estoqueSaidaProdutos', __('models/estoqueSaidaProdutos.plural'));
Breadcrumbs::resource('eventos', __('models/eventos.plural'));
Breadcrumbs::resource('eventosOrcamentos', __('models/eventosOrcamentos.plural'));
Breadcrumbs::resource('fabricantes', __('models/fabricantes.plural'));
Breadcrumbs::resource('faturaEventosOs', __('models/faturaEventosOs.plural'));
Breadcrumbs::resource('faturaManutencaos', __('models/faturaManutencaos.plural'));
Breadcrumbs::resource('faturaManutencaoOs', __('models/faturaManutencaoOs.plural'));
Breadcrumbs::resource('faturaObras', __('models/faturaObras.plural'));
Breadcrumbs::resource('faturaObrasOs', __('models/faturaObrasOs.plural'));
Breadcrumbs::resource('fornecedors', __('models/fornecedors.plural'));
Breadcrumbs::resource('funcips', __('models/funcips.plural'));
Breadcrumbs::resource('iluminacaoPublicas', __('models/iluminacaoPublicas.plural'));
Breadcrumbs::resource('ipcontaip10s', __('models/ipcontaip10s.plural'));
Breadcrumbs::resource('ipcontaip11s', __('models/ipcontaip11s.plural'));
Breadcrumbs::resource('ipcontaip12s', __('models/ipcontaip12s.plural'));
Breadcrumbs::resource('ipcontaip13s', __('models/ipcontaip13s.plural'));
Breadcrumbs::resource('ipcontaip14s', __('models/ipcontaip14s.plural'));
Breadcrumbs::resource('ipcontaip14Dadosfaturas', __('models/ipcontaip14Dadosfaturas.plural'));
Breadcrumbs::resource('ipcontaipEstimadas', __('models/ipcontaipEstimadas.plural'));
Breadcrumbs::resource('ipcontaipMedidas', __('models/ipcontaipMedidas.plural'));
Breadcrumbs::resource('ipcontaipSecretarias', __('models/ipcontaipSecretarias.plural'));
Breadcrumbs::resource('lampadas', __('models/lampadas.plural'));
Breadcrumbs::resource('logradouros', __('models/logradouros.plural'));
Breadcrumbs::resource('logradouroTipos', __('models/logradouroTipos.plural'));
Breadcrumbs::resource('luminarias', __('models/luminarias.plural'));
Breadcrumbs::resource('marcas', __('models/marcas.plural'));
Breadcrumbs::resource('medidors', __('models/medidors.plural'));
Breadcrumbs::resource('mensagems', __('models/mensagems.plural'));
Breadcrumbs::resource('meses', __('models/meses.plural'));
Breadcrumbs::resource('objetoIluminados', __('models/objetoIluminados.plural'));
Breadcrumbs::resource('obras', __('models/obras.plural'));
Breadcrumbs::resource('obrasBaixaIps', __('models/obrasBaixaIps.plural'));
Breadcrumbs::resource('obrasBaixaIpAnteriors', __('models/obrasBaixaIpAnteriors.plural'));
Breadcrumbs::resource('obrasEstoques', __('models/obrasEstoques.plural'));
Breadcrumbs::resource('obrasOrcamentos', __('models/obrasOrcamentos.plural'));
Breadcrumbs::resource('obrasSolicitantes', __('models/obrasSolicitantes.plural'));
Breadcrumbs::resource('operacaos', __('models/operacaos.plural'));
Breadcrumbs::resource('origemSolicitacaos', __('models/origemSolicitacaos.plural'));
Breadcrumbs::resource('pedidos', __('models/pedidos.plural'));
Breadcrumbs::resource('pedidoCabecalhos', __('models/pedidoCabecalhos.plural'));
Breadcrumbs::resource('pedidoProdutos', __('models/pedidoProdutos.plural'));
Breadcrumbs::resource('perfils', __('models/perfils.plural'));
Breadcrumbs::resource('perfilCadastros', __('models/perfilCadastros.plural'));
Breadcrumbs::resource('postes', __('models/postes.plural'));
Breadcrumbs::resource('produtos', __('models/produtos.plural'));
Breadcrumbs::resource('ras', __('models/ras.plural'));
Breadcrumbs::resource('reators', __('models/reators.plural'));
Breadcrumbs::resource('redes', __('models/redes.plural'));
Breadcrumbs::resource('reles', __('models/reles.plural'));
Breadcrumbs::resource('respostas', __('models/respostas.plural'));
Breadcrumbs::resource('respostasMensagemDiarias', __('models/respostasMensagemDiarias.plural'));
Breadcrumbs::resource('respostasUsuarios', __('models/respostasUsuarios.plural'));
Breadcrumbs::resource('sequencials', __('models/sequencials.plural'));
Breadcrumbs::resource('solicitacaoMaterials', __('models/solicitacaoMaterials.plural'));
Breadcrumbs::resource('solicitacaoMaterialItens', __('models/solicitacaoMaterialItens.plural'));
Breadcrumbs::resource('solicitacaoReclamacaos', __('models/solicitacaoReclamacaos.plural'));
Breadcrumbs::resource('solicitacaoReclamacaoSolicitantes', __('models/solicitacaoReclamacaoSolicitantes.plural'));
Breadcrumbs::resource('subestacaos', __('models/subestacaos.plural'));
Breadcrumbs::resource('suportes', __('models/suportes.plural'));
Breadcrumbs::resource('tarifas', __('models/tarifas.plural'));
Breadcrumbs::resource('tipoSolicitacaos', __('models/tipoSolicitacaos.plural'));
Breadcrumbs::resource('tipoSolicitantes', __('models/tipoSolicitantes.plural'));
Breadcrumbs::resource('tipoacaos', __('models/tipoacaos.plural'));
Breadcrumbs::resource('transformadors', __('models/transformadors.plural'));
Breadcrumbs::resource('turmas', __('models/turmas.plural'));
Breadcrumbs::resource('unidades', __('models/unidades.plural'));
Breadcrumbs::resource('usuarioCidades', __('models/usuarioCidades.plural'));
Breadcrumbs::resource('usuarios', __('models/usuarios.plural'));
Breadcrumbs::resource('veiculos', __('models/veiculos.plural'));
Breadcrumbs::resource('veiculosMovimentacaos', __('models/veiculosMovimentacaos.plural'));
Breadcrumbs::resource('veiculosServicos', __('models/veiculosServicos.plural'));
Breadcrumbs::resource('faturaEventos', __('models/faturaEventos.plural'));

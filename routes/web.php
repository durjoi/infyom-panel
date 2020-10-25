<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'HomeController@index');

Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');

Route::post('login', 'Auth\LoginController@login');

Route::post('logout', 'Auth\LoginController@logout')->name('logout');

Route::get('register', 'Auth\LoginController@showRegistrationForm')->name('register');

Route::post('register', 'Auth\RegisterController@register');

Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm');

Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail');

Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm');

Route::post('password/reset', 'Auth\ResetPasswordController@reset');


// Auth::routes(['verify' => true]);

Route::get('home', ['uses' => 'HomeController@index', 'as' => 'home'])->middleware('verified');
Route::get('email', ['uses' => 'HomeController@email']);


Route::get('generator_builder', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@builder')->name('io_generator_builder');

Route::get('field_template', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@fieldTemplate')->name('io_field_template');

Route::get('relation_field_template', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@relationFieldTemplate')->name('io_relation_field_template');

Route::post('generator_builder/generate', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@generate')->name('io_generator_builder_generate');

Route::post('generator_builder/rollback', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@rollback')->name('io_generator_builder_rollback');

Route::post(
    'generator_builder/generate-from-file',
    '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@generateFromFile'
)->name('io_generator_builder_generate_from_file');


Route::get('homepage', 'HomeController@homepage')->middleware('verified');


Route::post('submitEvalReport', 'EvalReportController@insert')->middleware('verified');

Route::post('updateEvalReport', 'EvalReportController@update')->middleware('verified');

Route::post('delete_record', 'EvalReportController@delete')->middleware('verified');

Route::get('avaliacaoTerapeutica/view/{id}', 'EvalReportController@read')->middleware('verified');

Route::get('avaliacaoTerapeutica/edit/{id}', 'EvalReportController@edit')->middleware('verified');

Route::get('avaliacaoTerapeutica', 'EvalReportController@index')->middleware('verified');



Route::get('avaliacoes', 'AvaliacoesController@index')->middleware('verified');

Route::get('avaliacoes/create', 'AvaliacoesController@create')->middleware('verified');

Route::post('avaliacoes/insert', 'AvaliacoesController@insert')->middleware('verified');

Route::post('avaliacoes/delete', 'AvaliacoesController@delete')->middleware('verified');

Route::get('avaliacoes/view/{id}', 'AvaliacoesController@read')->middleware('verified');

Route::get('avaliacoes/edit/{id}', 'AvaliacoesController@edit')->middleware('verified');

Route::post('avaliacoes/update', 'AvaliacoesController@update')->middleware('verified');



Route::get('power_breath', 'PowerBreathController@index')->middleware('verified');

Route::get('power_breath/create', 'PowerBreathController@create')->middleware('verified');

Route::post('power_breath/insert', 'PowerBreathController@insert')->middleware('verified');

Route::post('power_breath/delete', 'PowerBreathController@delete')->middleware('verified');

Route::get('power_breath/view/{id}', 'PowerBreathController@read')->middleware('verified');

Route::get('power_breath/edit/{id}', 'PowerBreathController@edit')->middleware('verified');

Route::post('power_breath/update', 'PowerBreathController@update')->middleware('verified');



Route::get('dourado', 'DouradoController@index')->middleware('verified');

Route::get('dourado/create', 'DouradoController@create')->middleware('verified');

Route::post('dourado/insert', 'DouradoController@insert')->middleware('verified');

Route::post('dourado/delete', 'DouradoController@delete')->middleware('verified');

Route::get('dourado/view/{id}', 'DouradoController@read')->middleware('verified');

Route::get('dourado/edit/{id}', 'DouradoController@edit')->middleware('verified');

Route::post('dourado/update', 'DouradoController@update')->middleware('verified');



Route::resource('cidades', 'cidadeController')->middleware('verified');

Route::resource('usuarioCidades', 'usuarioCidadeController')->middleware('verified');

Route::resource('datosDoUsuarios', 'datosDoUsuarioController')->middleware('verified');

Route::resource('bairros', 'BairrosController')->middleware('verified');

Route::resource('aplicacaos', 'AplicacaosController')->middleware('verified');

Route::resource('causaDefeitos', 'Causa_defeitosController')->middleware('verified');

Route::resource('clientes', 'ClientesController')->middleware('verified');

Route::resource('contratos', 'ContratosController')->middleware('verified');

Route::resource('contratoItens', 'Contrato_itensController')->middleware('verified');

Route::resource('contratoItensAjustes', 'Contrato_itens_ajusteController')->middleware('verified');

Route::resource('controleHistoricos', 'Controle_historicosController')->middleware('verified');

Route::resource('controleMotivos', 'Controle_motivosController')->middleware('verified');

Route::resource('defeitosEncontrados', 'Defeitos_encontradosController')->middleware('verified');

Route::resource('digitacaoCadastros', 'Digitacao_cadastrosController')->middleware('verified');

Route::resource('empregados', 'EmpregadosController')->middleware('verified');

Route::resource('empresas', 'EmpresasController')->middleware('verified');

Route::resource('estoqueEntradas', 'Estoque_entradasController')->middleware('verified');

Route::resource('estoqueEntradasProdutos', 'Estoque_entradas_produtoController')->middleware('verified');

Route::resource('estoqueEpiEpcFerramentals', 'Estoque_epi_epc_ferramentalController')->middleware('verified');

Route::resource('estoqueEpiEpcFerramentalProdutos', 'Estoque_epi_epc_ferramental_produtosController')->middleware('verified');

Route::resource('estoqueSaidas', 'Estoque_saidaController')->middleware('verified');

Route::resource('estoqueSaidaProdutos', 'Estoque_saida_produtosController')->middleware('verified');

Route::resource('eventos', 'EventosController')->middleware('verified');

Route::resource('eventosOrcamentos', 'Eventos_orcamentoController')->middleware('verified');

Route::resource('fabricantes', 'FabricanteController')->middleware('verified');

Route::resource('faturaEventos', 'Fatura_eventosController')->middleware('verified');

Route::resource('faturaEventosOs', 'Fatura_eventos_osController')->middleware('verified');

Route::resource('faturaManutencaos', 'Fatura_manutencaoController')->middleware('verified');

Route::resource('faturaManutencaoOs', 'fatura_manutencao_osController')->middleware('verified');

Route::resource('faturaObras', 'fatura_obrasController')->middleware('verified');

Route::resource('faturaObrasOs', 'fatura_obras_osController')->middleware('verified');

Route::resource('fornecedors', 'fornecedorController')->middleware('verified');

Route::resource('funcips', 'funcipController')->middleware('verified');

Route::resource('iluminacaoPublicas', 'iluminacao_publicaController')->middleware('verified');

Route::resource('ipcontaip10s', 'ipcontaip_10Controller')->middleware('verified');

Route::resource('ipcontaip11s', 'ipcontaip_11Controller')->middleware('verified');

Route::resource('ipcontaip12s', 'ipcontaip_12Controller')->middleware('verified');

Route::resource('ipcontaip13s', 'ipcontaip_13Controller')->middleware('verified');

Route::resource('ipcontaip14s', 'ipcontaip_14Controller')->middleware('verified');

Route::resource('ipcontaip14Dadosfaturas', 'ipcontaip_14_dadosfaturaController')->middleware('verified');

Route::resource('ipcontaipEstimadas', 'ipcontaip_estimadaController')->middleware('verified');

Route::resource('ipcontaipMedidas', 'ipcontaip_medidaController')->middleware('verified');

Route::resource('ipcontaipSecretarias', 'ipcontaip_secretariasController')->middleware('verified');

Route::resource('lampadas', 'lampadaController')->middleware('verified');

Route::resource('logradouros', 'logradouroController')->middleware('verified');

Route::resource('logradouroTipos', 'logradouro_tipoController')->middleware('verified');

Route::resource('luminarias', 'luminariaController')->middleware('verified');

Route::resource('marcas', 'marcaController')->middleware('verified');

Route::resource('medidors', 'medidorController')->middleware('verified');

Route::resource('mensagems', 'mensagemController')->middleware('verified');

Route::resource('meses', 'mesesController')->middleware('verified');

Route::resource('objetoIluminados', 'objeto_iluminadoController')->middleware('verified');

Route::resource('obras', 'obrasController')->middleware('verified');

Route::resource('obrasBaixaIps', 'obras_baixa_ipController')->middleware('verified');

Route::resource('obrasBaixaIpAnteriors', 'obras_baixa_ip_anteriorController')->middleware('verified');

Route::resource('obrasEstoques', 'obras_estoqueController')->middleware('verified');

Route::resource('obrasOrcamentos', 'obras_orcamentoController')->middleware('verified');

Route::resource('obrasSolicitantes', 'obras_solicitanteController')->middleware('verified');

Route::resource('operacaos', 'operacaoController')->middleware('verified');

Route::resource('origemSolicitacaos', 'origem_solicitacaoController')->middleware('verified');

Route::resource('pedidos', 'pedidoController')->middleware('verified');

Route::resource('pedidoCabecalhos', 'pedido_cabecalhoController')->middleware('verified');

Route::resource('pedidoProdutos', 'pedido_produtosController')->middleware('verified');

Route::resource('perfils', 'perfilController')->middleware('verified');

Route::resource('perfilCadastros', 'perfil_cadastroController')->middleware('verified');

Route::resource('postes', 'posteController')->middleware('verified');

Route::resource('produtos', 'produtosController')->middleware('verified');

Route::resource('ras', 'raController')->middleware('verified');

Route::resource('reators', 'reatorController')->middleware('verified');

Route::resource('redes', 'redeController')->middleware('verified');

Route::resource('reles', 'releController')->middleware('verified');

Route::resource('respostas', 'respostasController')->middleware('verified');

Route::resource('respostasMensagemDiarias', 'respostas_mensagem_diariaController')->middleware('verified');

Route::resource('respostasUsuarios', 'respostas_usuariosController')->middleware('verified');

Route::resource('sequencials', 'sequencialController')->middleware('verified');

Route::resource('solicitacaoMaterials', 'solicitacao_materialController')->middleware('verified');

Route::resource('solicitacaoMaterialItens', 'solicitacao_material_itensController')->middleware('verified');

Route::resource('solicitacaoReclamacaos', 'solicitacao_reclamacaoController')->middleware('verified');

Route::resource('solicitacaoReclamacaoSolicitantes', 'solicitacao_reclamacao_solicitantesController')->middleware('verified');

Route::resource('subestacaos', 'subestacaoController')->middleware('verified');

Route::resource('suportes', 'suporteController')->middleware('verified');

Route::resource('tarifas', 'tarifaController')->middleware('verified');

Route::resource('tipoSolicitacaos', 'tipo_solicitacaoController')->middleware('verified');

Route::resource('tipoSolicitantes', 'tipo_solicitanteController')->middleware('verified');

Route::resource('tipoacaos', 'tipoacaoController')->middleware('verified');

Route::resource('transformadors', 'transformadorController')->middleware('verified');

Route::resource('turmas', 'turmaController')->middleware('verified');

Route::resource('unidades', 'unidadeController')->middleware('verified');

Route::resource('usuarioCidades', 'usuario_cidadeController')->middleware('verified');

Route::resource('usuarios', 'usuarioController')->middleware('verified');

Route::resource('veiculos', 'veiculosController')->middleware('verified');

Route::resource('veiculosMovimentacaos', 'veiculos_movimentacaoController')->middleware('verified');

Route::resource('veiculosServicos', 'veiculos_servicosController')->middleware('verified');

Route::resource('faturaEventos', 'fatura_eventoController')->middleware('verified');

Route::resource('causaDefeitos', 'Causa_defeitosController')->middleware('verified');

Route::resource('causaDefeitos', 'Causa_defeitosController')->middleware('verified');

Route::resource('causaDefeitos', 'Causa_defeitosController')->middleware('verified');

Route::resource('causaDefeitos', 'Causa_defeitosController')->middleware('verified');

Route::resource('causaDefeitos', 'Causa_defeitosController')->middleware('verified');

Route::resource('causaDefeitos', 'Causa_defeitosController')->middleware('verified');

Route::resource('causaDefeitos', 'Causa_defeitosController')->middleware('verified');

Route::resource('iluminacaoPublicas', 'iluminacao_publicaController')->middleware('verified');

Route::resource('causaDefeitos', 'Causa_defeitosController')->middleware('verified');

Route::resource('ipcontaip10s', 'ipcontaip_10Controller')->middleware('verified');

Route::resource('ipcontaip11s', 'ipcontaip_11Controller')->middleware('verified');

Route::resource('ipcontaip12s', 'ipcontaip_12Controller')->middleware('verified');

Route::resource('contratoItensAjustes', 'Contrato_itens_ajusteController')->middleware('verified');

Route::resource('ipcontaip13s', 'ipcontaip_13Controller')->middleware('verified');

Route::resource('contratoItens', 'Contrato_itensController')->middleware('verified');

Route::resource('ipcontaip14Dadosfaturas', 'ipcontaip_14_dadosfaturaController')->middleware('verified');

Route::resource('ipcontaip14s', 'ipcontaip_14Controller')->middleware('verified');

Route::resource('respostasMensagemDiarias', 'respostas_mensagem_diariaController')->middleware('verified');

Route::resource('controleHistoricos', 'Controle_historicosController')->middleware('verified');

Route::resource('ipcontaipEstimadas', 'ipcontaip_estimadaController')->middleware('verified');

Route::resource('controleMotivos', 'Controle_motivosController')->middleware('verified');

Route::resource('ipcontaipMedidas', 'ipcontaip_medidaController')->middleware('verified');

Route::resource('respostasUsuarios', 'respostas_usuariosController')->middleware('verified');

Route::resource('datosDoUsuarios', 'datosDoUsuarioController')->middleware('verified');

Route::resource('ipcontaipSecretarias', 'ipcontaip_secretariasController')->middleware('verified');

Route::resource('defeitosEncontrados', 'Defeitos_encontradosController')->middleware('verified');

Route::resource('solicitacaoMaterialItens', 'solicitacao_material_itensController')->middleware('verified');

Route::resource('digitacaoCadastros', 'Digitacao_cadastrosController')->middleware('verified');

Route::resource('solicitacaoMaterials', 'solicitacao_materialController')->middleware('verified');

Route::resource('logradouroTipos', 'logradouro_tipoController')->middleware('verified');

Route::resource('solicitacaoReclamacaos', 'solicitacao_reclamacaoController')->middleware('verified');

Route::resource('solicitacaoReclamacaoSolicitantes', 'solicitacao_reclamacao_solicitantesController')->middleware('verified');

Route::resource('estoqueEntradas', 'Estoque_entradasController')->middleware('verified');

Route::resource('estoqueEntradasProdutos', 'Estoque_entradas_produtoController')->middleware('verified');

Route::resource('estoqueEpiEpcFerramentals', 'Estoque_epi_epc_ferramentalController')->middleware('verified');

Route::resource('estoqueEpiEpcFerramentalProdutos', 'Estoque_epi_epc_ferramental_produtosController')->middleware('verified');

Route::resource('estoqueSaidas', 'Estoque_saidaController')->middleware('verified');

Route::resource('objetoIluminados', 'objeto_iluminadoController')->middleware('verified');

Route::resource('tipoSolicitacaos', 'tipo_solicitacaoController')->middleware('verified');

Route::resource('estoqueSaidaProdutos', 'Estoque_saida_produtosController')->middleware('verified');

Route::resource('obrasBaixaIpAnteriors', 'obras_baixa_ip_anteriorController')->middleware('verified');

Route::resource('tipoSolicitantes', 'tipo_solicitanteController')->middleware('verified');

Route::resource('eventosOrcamentos', 'Eventos_orcamentoController')->middleware('verified');

Route::resource('obrasBaixaIps', 'obras_baixa_ipController')->middleware('verified');

Route::resource('obrasEstoques', 'obras_estoqueController')->middleware('verified');

Route::resource('obrasOrcamentos', 'obras_orcamentoController')->middleware('verified');

Route::resource('faturaEventos', 'fatura_eventoController')->middleware('verified');

Route::resource('usuarioCidades', 'usuario_cidadeController')->middleware('verified');

Route::resource('faturaEventosOs', 'Fatura_eventos_osController')->middleware('verified');

Route::resource('obrasSolicitantes', 'obras_solicitanteController')->middleware('verified');

Route::resource('usuarioCidades', 'usuarioCidadeController')->middleware('verified');

Route::resource('faturaEventos', 'Fatura_eventosController')->middleware('verified');

Route::resource('faturaManutencaoOs', 'fatura_manutencao_osController')->middleware('verified');

Route::resource('origemSolicitacaos', 'origem_solicitacaoController')->middleware('verified');

Route::resource('veiculosMovimentacaos', 'veiculos_movimentacaoController')->middleware('verified');

Route::resource('faturaManutencaos', 'Fatura_manutencaoController')->middleware('verified');

Route::resource('pedidoCabecalhos', 'pedido_cabecalhoController')->middleware('verified');

Route::resource('faturaObrasOs', 'fatura_obras_osController')->middleware('verified');

Route::resource('veiculosServicos', 'veiculos_servicosController')->middleware('verified');

Route::resource('faturaObras', 'fatura_obrasController')->middleware('verified');

Route::resource('pedidoProdutos', 'pedido_produtosController')->middleware('verified');

Route::resource('perfilCadastros', 'perfil_cadastroController')->middleware('verified');

Route::resource('ordemDeServicos', 'OrdemDeServicoController')->middleware('verified');


Route::resource('logradouroTipos', 'logradouro_tipoController')->middleware('verified');

Route::resource('logradouroTipos', 'logradouro_tipoController')->middleware('verified');

Route::resource('logradouroTipos', 'logradouro_tipoController')->middleware('verified');

Route::resource('logradouroTipos', 'logradouro_tipoController')->middleware('verified');

Route::resource('logradouroTipos', 'logradouro_tipoController')->middleware('verified');

Route::resource('logradouroTipos', 'logradouro_tipoController')->middleware('verified');

Route::resource('logradouroTipos', 'logradouro_tipoController')->middleware('verified');

Route::resource('logradouroTipos', 'logradouro_tipoController')->middleware('verified');

Route::resource('iluminacaoPublicas', 'iluminacao_publicaController')->middleware('verified');

Route::resource('causaDefeitos', 'Causa_defeitosController')->middleware('verified');

Route::resource('ipcontaip10s', 'ipcontaip_10Controller')->middleware('verified');

Route::resource('ipcontaip11s', 'ipcontaip_11Controller')->middleware('verified');

Route::resource('ipcontaip12s', 'ipcontaip_12Controller')->middleware('verified');

Route::resource('contratoItensAjustes', 'Contrato_itens_ajusteController')->middleware('verified');

Route::resource('ipcontaip13s', 'ipcontaip_13Controller')->middleware('verified');

Route::resource('contratoItens', 'Contrato_itensController')->middleware('verified');

Route::resource('ipcontaip14Dadosfaturas', 'ipcontaip_14_dadosfaturaController')->middleware('verified');

Route::resource('ipcontaip14s', 'ipcontaip_14Controller')->middleware('verified');

Route::resource('respostasMensagemDiarias', 'respostas_mensagem_diariaController')->middleware('verified');

Route::resource('controleHistoricos', 'Controle_historicosController')->middleware('verified');

Route::resource('ipcontaipEstimadas', 'ipcontaip_estimadaController')->middleware('verified');

Route::resource('controleMotivos', 'Controle_motivosController')->middleware('verified');

Route::resource('ipcontaipMedidas', 'ipcontaip_medidaController')->middleware('verified');

Route::resource('respostasUsuarios', 'respostas_usuariosController')->middleware('verified');

Route::resource('datosDoUsuarios', 'datosDoUsuarioController')->middleware('verified');

Route::resource('ipcontaipSecretarias', 'ipcontaip_secretariasController')->middleware('verified');

Route::resource('defeitosEncontrados', 'Defeitos_encontradosController')->middleware('verified');

Route::resource('solicitacaoMaterialItens', 'solicitacao_material_itensController')->middleware('verified');

Route::resource('digitacaoCadastros', 'Digitacao_cadastrosController')->middleware('verified');

Route::resource('solicitacaoMaterials', 'solicitacao_materialController')->middleware('verified');

Route::resource('logradouroTipos', 'logradouro_tipoController')->middleware('verified');

Route::resource('solicitacaoReclamacaos', 'solicitacao_reclamacaoController')->middleware('verified');

Route::resource('solicitacaoReclamacaoSolicitantes', 'solicitacao_reclamacao_solicitantesController')->middleware('verified');

Route::resource('estoqueEntradas', 'Estoque_entradasController')->middleware('verified');

Route::resource('estoqueEntradasProdutos', 'Estoque_entradas_produtoController')->middleware('verified');

Route::resource('estoqueEpiEpcFerramentals', 'Estoque_epi_epc_ferramentalController')->middleware('verified');

Route::resource('estoqueEpiEpcFerramentalProdutos', 'Estoque_epi_epc_ferramental_produtosController')->middleware('verified');

Route::resource('estoqueSaidas', 'Estoque_saidaController')->middleware('verified');

Route::resource('objetoIluminados', 'objeto_iluminadoController')->middleware('verified');

Route::resource('tipoSolicitacaos', 'tipo_solicitacaoController')->middleware('verified');

Route::resource('estoqueSaidaProdutos', 'Estoque_saida_produtosController')->middleware('verified');

Route::resource('obrasBaixaIpAnteriors', 'obras_baixa_ip_anteriorController')->middleware('verified');

Route::resource('tipoSolicitantes', 'tipo_solicitanteController')->middleware('verified');

Route::resource('eventosOrcamentos', 'Eventos_orcamentoController')->middleware('verified');

Route::resource('obrasBaixaIps', 'obras_baixa_ipController')->middleware('verified');

Route::resource('obrasEstoques', 'obras_estoqueController')->middleware('verified');

Route::resource('obrasOrcamentos', 'obras_orcamentoController')->middleware('verified');

Route::resource('faturaEventos', 'fatura_eventoController')->middleware('verified');

Route::resource('usuarioCidades', 'usuario_cidadeController')->middleware('verified');

Route::resource('faturaEventosOs', 'Fatura_eventos_osController')->middleware('verified');

Route::resource('obrasSolicitantes', 'obras_solicitanteController')->middleware('verified');

Route::resource('usuarioCidades', 'usuarioCidadeController')->middleware('verified');

Route::resource('faturaEventos', 'Fatura_eventosController')->middleware('verified');

Route::resource('faturaManutencaoOs', 'fatura_manutencao_osController')->middleware('verified');

Route::resource('origemSolicitacaos', 'origem_solicitacaoController')->middleware('verified');

Route::resource('veiculosMovimentacaos', 'veiculos_movimentacaoController')->middleware('verified');

Route::resource('faturaManutencaos', 'Fatura_manutencaoController')->middleware('verified');

Route::resource('pedidoCabecalhos', 'pedido_cabecalhoController')->middleware('verified');

Route::resource('faturaObrasOs', 'fatura_obras_osController')->middleware('verified');

Route::resource('veiculosServicos', 'veiculos_servicosController')->middleware('verified');

Route::resource('faturaObras', 'fatura_obrasController')->middleware('verified');

Route::resource('pedidoProdutos', 'pedido_produtosController')->middleware('verified');

Route::resource('perfilCadastros', 'perfil_cadastroController')->middleware('verified');

Route::resource('ordemDeServicos', 'ordemDeServicoController')->middleware('verified');

Route::resource('activityLogs', 'activityLogController')->middleware('verified');

Route::resource('activityLogs', 'activityLogController')->middleware('verified');

Route::resource('requicisaos', 'requicisaoController')->middleware('verified');

Route::resource('requisicaos', 'requisicaoController')->middleware('verified');

Route::resource('items', 'itemController')->middleware('verified');

Route::resource('ordemDeServicos', 'ordemDeServicoController')->middleware('verified');


Route::resource('acompanhamentoObras', 'AcompanhamentoObrasController');

Route::resource('acompanhamentoObras', 'AcompanhamentoObrasController');

Route::resource('acompanhamentoObras', 'AcompanhamentoObrasController');

Route::resource('pontos', 'PontosController');

Route::resource('bases', 'BasesController');

Route::resource('ordemDeServicoManutencaos', 'OrdemDeServicoManutencaoController');

Route::resource('itensOs', 'ItensOsController');

Route::resource('ordemDeServicoManutencaos', 'OrdemDeServicoManutencaoController');

Route::resource('itensOs', 'ItensOsController');

Route::resource('itensOs', 'ItensOsController');

Route::resource('pedidoMaterials', 'PedidoMaterialController');

Route::resource('pedidoMaterialItems', 'PedidoMaterialItemController');

Route::resource('pedidoMaterials', 'PedidoMaterialController');
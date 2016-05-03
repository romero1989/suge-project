@extends('layout.padrao')
@section('title', 'Acadêmico')

@section('title.descricao', 'Adicionar novo acadêmico')
@section('breadcrumbs', Breadcrumbs::render('secretaria.academico'))

@section('conteudo')
@include('flash::message')

@include('layout._partials.modal')

<div class="row">

    <div class="col-md-12">

        <ul class="nav nav-tabs">
            <li class="active">
                <a href="#home-3" data-toggle="tab">
                    <span class="visible-xs"><i class="fa-home"></i></span>
                    <span class="hidden-xs">Dados Pessoais</span>
                </a>
            </li>
            <li>
                <a href="#profile-3" data-toggle="tab">
                    <span class="visible-xs"><i class="fa-user"></i></span>
                    <span class="hidden-xs">Dados Complementares</span>
                </a>
            </li>
            <li>
                <a href="#messages-3" data-toggle="tab">
                    <span class="visible-xs"><i class="fa-envelope-o"></i></span>
                    <span class="hidden-xs">Documentos</span>
                </a>
            </li>
        </ul>

        <div class="tab-content">
            <div class="tab-pane active" id="home-3">

                <div class="row">
                    <div class="col-md-6">

                        <div class="form-group">
                            <label for="field-1" class="control-label">Nome</label>

                            <input type="text" class="form-control" id="field-1" placeholder="Nome Completo">
                        </div>

                    </div>

                    <div class="col-md-3">

                        <div class="form-group">
                            <label for="field-2" class="control-label">CPF</label>

                            <input type="text" class="form-control" id="field-2" placeholder="xxx.xxx.xxx-xx">
                        </div>

                    </div>

                    <div class="col-md-3">

                        <div class="form-group">
                            <label for="field-2" class="control-label">Data de Nascimento</label>

                            <input type="text" class="form-control" id="field-2" placeholder="dd/mm/aaaa">
                        </div>

                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4">

                        <div class="form-group">
                            <label for="field-3" class="control-label">Local de Nascimento</label>

                            <input type="text" class="form-control" id="field-3" placeholder="Address">
                        </div>

                    </div>
                    <div class="col-md-2">

                        <div class="form-group">
                            <label for="field-3" class="control-label">Estado</label>

                            <input type="text" class="form-control" id="field-3" placeholder="Address">
                        </div>

                    </div>
                    <div class="col-md-3">

                        <div class="form-group">
                            <label for="field-3" class="control-label">Nacionalidade</label>

                            <input type="text" class="form-control" id="field-3" placeholder="Address">
                        </div>

                    </div>
                    <div class="col-md-3">

                        <div class="form-group">
                            <label for="field-3" class="control-label">Sexo</label>

                            <div class="form-group">
                                <label class="control-label">Simple select</label>

                                <select id="sboxit-1" class="form-control" style="display: none;">
                                    <option value="al">Albania</option>
                                    <option value="au">Australia</option>
                                    <option value="bd">Bandgladesh</option>
                                    <option value="br">Brasil</option>
                                    <option value="ca">Canada</option>
                                    <option value="cn">China</option>
                                    <option value="de">Germany</option>
                                    <option value="fr">France</option>
                                    <option value="gr">Greece</option>
                                    <option value="jp">Japan</option>
                                    <option value="xk">Kosovo</option>
                                    <option value="nl">Netherlands</option>
                                    <option value="no">Norway</option>
                                    <option value="ru">Russia</option>
                                    <option value="se">Sweden</option>
                                    <option value="tr">Turkey</option>
                                    <option value="uk">United Kingdom</option>
                                    <option value="us">United States</option>
                                </select><span id="sboxit-1SelectBoxItContainer" class="selectboxit-container selectboxit-container" role="combobox" aria-autocomplete="list" aria-haspopup="true" aria-expanded="false" aria-owns="sboxit-1SelectBoxItOptions"><span id="sboxit-1SelectBoxIt" class="selectboxit form-control selectboxit-enabled selectboxit-btn" name="" tabindex="0" unselectable="on" style="width: 155px;"><span class="selectboxit-option-icon-container"><i id="sboxit-1SelectBoxItDefaultIcon" class="selectboxit-default-icon selectboxit-option-icon selectboxit-container" unselectable="on"></i></span><span id="sboxit-1SelectBoxItText" class="selectboxit-text" unselectable="on" data-val="al" style="max-width: 30px;" aria-live="polite">Albania</span><span id="sboxit-1SelectBoxItArrowContainer" class="selectboxit-arrow-container" unselectable="on"><i id="sboxit-1SelectBoxItArrow" class="selectboxit-arrow selectboxit-default-arrow" unselectable="on"></i></span></span><ul id="sboxit-1SelectBoxItOptions" class="selectboxit-options selectboxit-list ps-container" tabindex="-1" style="min-width: 58px; max-height: 250px; top: auto; display: none;" role="listbox" aria-hidden="true"><li class="selectboxit-option  selectboxit-option-first selectboxit-selected ms-hover selectboxit-focus" data-disabled="false" data-val="al" data-id="0" role="option" data-active=""><a class="selectboxit-option-anchor"><span class="selectboxit-option-icon-container"><i class="selectboxit-option-icon  selectboxit-container"></i></span>Albania</a></li><li class="selectboxit-option ms-hover" data-disabled="false" data-val="au" data-id="1" role="option"><a class="selectboxit-option-anchor"><span class="selectboxit-option-icon-container"><i class="selectboxit-option-icon  selectboxit-container"></i></span>Australia</a></li><li class="selectboxit-option" data-disabled="false" data-val="bd" data-id="2" role="option"><a class="selectboxit-option-anchor"><span class="selectboxit-option-icon-container"><i class="selectboxit-option-icon  selectboxit-container"></i></span>Bandgladesh</a></li><li class="selectboxit-option" data-disabled="false" data-val="br" data-id="3" role="option"><a class="selectboxit-option-anchor"><span class="selectboxit-option-icon-container"><i class="selectboxit-option-icon  selectboxit-container"></i></span>Brasil</a></li><li class="selectboxit-option" data-disabled="false" data-val="ca" data-id="4" role="option"><a class="selectboxit-option-anchor"><span class="selectboxit-option-icon-container"><i class="selectboxit-option-icon  selectboxit-container"></i></span>Canada</a></li><li class="selectboxit-option" data-disabled="false" data-val="cn" data-id="5" role="option"><a class="selectboxit-option-anchor"><span class="selectboxit-option-icon-container"><i class="selectboxit-option-icon  selectboxit-container"></i></span>China</a></li><li class="selectboxit-option" data-disabled="false" data-val="de" data-id="6" role="option"><a class="selectboxit-option-anchor"><span class="selectboxit-option-icon-container"><i class="selectboxit-option-icon  selectboxit-container"></i></span>Germany</a></li><li class="selectboxit-option" data-disabled="false" data-val="fr" data-id="7" role="option"><a class="selectboxit-option-anchor"><span class="selectboxit-option-icon-container"><i class="selectboxit-option-icon  selectboxit-container"></i></span>France</a></li><li class="selectboxit-option" data-disabled="false" data-val="gr" data-id="8" role="option"><a class="selectboxit-option-anchor"><span class="selectboxit-option-icon-container"><i class="selectboxit-option-icon  selectboxit-container"></i></span>Greece</a></li><li class="selectboxit-option" data-disabled="false" data-val="jp" data-id="9" role="option"><a class="selectboxit-option-anchor"><span class="selectboxit-option-icon-container"><i class="selectboxit-option-icon  selectboxit-container"></i></span>Japan</a></li><li class="selectboxit-option" data-disabled="false" data-val="xk" data-id="10" role="option"><a class="selectboxit-option-anchor"><span class="selectboxit-option-icon-container"><i class="selectboxit-option-icon  selectboxit-container"></i></span>Kosovo</a></li><li class="selectboxit-option" data-disabled="false" data-val="nl" data-id="11" role="option"><a class="selectboxit-option-anchor"><span class="selectboxit-option-icon-container"><i class="selectboxit-option-icon  selectboxit-container"></i></span>Netherlands</a></li><li class="selectboxit-option" data-disabled="false" data-val="no" data-id="12" role="option"><a class="selectboxit-option-anchor"><span class="selectboxit-option-icon-container"><i class="selectboxit-option-icon  selectboxit-container"></i></span>Norway</a></li><li class="selectboxit-option" data-disabled="false" data-val="ru" data-id="13" role="option"><a class="selectboxit-option-anchor"><span class="selectboxit-option-icon-container"><i class="selectboxit-option-icon  selectboxit-container"></i></span>Russia</a></li><li class="selectboxit-option" data-disabled="false" data-val="se" data-id="14" role="option"><a class="selectboxit-option-anchor"><span class="selectboxit-option-icon-container"><i class="selectboxit-option-icon  selectboxit-container"></i></span>Sweden</a></li><li class="selectboxit-option" data-disabled="false" data-val="tr" data-id="15" role="option"><a class="selectboxit-option-anchor"><span class="selectboxit-option-icon-container"><i class="selectboxit-option-icon  selectboxit-container"></i></span>Turkey</a></li><li class="selectboxit-option" data-disabled="false" data-val="uk" data-id="16" role="option"><a class="selectboxit-option-anchor"><span class="selectboxit-option-icon-container"><i class="selectboxit-option-icon  selectboxit-container"></i></span>United Kingdom</a></li><li class="selectboxit-option  selectboxit-option-last" data-disabled="false" data-val="us" data-id="17" role="option"><a class="selectboxit-option-anchor"><span class="selectboxit-option-icon-container"><i class="selectboxit-option-icon  selectboxit-container"></i></span>United States</a></li><div class="ps-scrollbar-x-rail" style="left: 0px; bottom: 3px;"><div class="ps-scrollbar-x" style="left: 0px; width: 0px;"></div></div><div class="ps-scrollbar-y-rail" style="top: 0px; right: 2px;"><div class="ps-scrollbar-y" style="top: 0px; height: 0px;"></div></div></ul></span>

                            </div>



                         </div>

                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4">

                        <div class="form-group">
                            <label for="field-4" class="control-label">City</label>

                            <input type="text" class="form-control" id="field-4" placeholder="Boston">
                        </div>

                    </div>

                    <div class="col-md-4">

                        <div class="form-group">
                            <label for="field-5" class="control-label">Country</label>

                            <input type="text" class="form-control" id="field-5" placeholder="United States">
                        </div>

                    </div>

                    <div class="col-md-4">

                        <div class="form-group">
                            <label for="field-6" class="control-label">Zip</label>

                            <input type="text" class="form-control" id="field-6" placeholder="123456">
                        </div>

                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">

                        <div class="form-group no-margin">
                            <label for="field-7" class="control-label">Personal Info</label>

                            <textarea class="form-control autogrow" id="field-7" placeholder="Write something about yourself"></textarea>
                        </div>

                    </div>
                </div>

            </div>
            <div class="tab-pane" id="profile-3">

                <p>Fulfilled direction use continual set him propriety continued. Saw met applauded favourite deficient engrossed concealed and her. Concluded boy perpetual old supposing. Farther related bed and passage comfort civilly. Dashwoods see frankness objection abilities the. As hastened oh produced prospect formerly up am. Placing forming nay looking old married few has. Margaret disposed add screened rendered six say his striking confined. </p>

                <p>When be draw drew ye. Defective in do recommend suffering. House it seven in spoil tiled court. Sister others marked fat missed did out use. Alteration possession dispatched collecting instrument travelling he or on. Snug give made at spot or late that mr. </p>

            </div>
            <div class="tab-pane" id="messages-3">

                <p>When be draw drew ye. Defective in do recommend suffering. House it seven in spoil tiled court. Sister others marked fat missed did out use. Alteration possession dispatched collecting instrument travelling he or on. Snug give made at spot or late that mr. </p>

                <p>Carriage quitting securing be appetite it declared. High eyes kept so busy feel call in. Would day nor ask walls known. But preserved advantage are but and certainty earnestly enjoyment. Passage weather as up am exposed. And natural related man subject. Eagerness get situation his was delighted. </p>

            </div>

        </div>


    </div>
</div>

@stop

@section('js')
    <script type="text/javascript">
        jQuery(document).ready(function($)
        {
            $("#sboxit-1").selectBoxIt().on('open', function()
            {
                // Adding Custom Scrollbar
                $(this).data('selectBoxSelectBoxIt').list.perfectScrollbar();
            });
        });
    </script>
@endsection



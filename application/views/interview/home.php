<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Interview|Home</title>

    <div class="container-fluid">
        <form class="form-horizontal " action="<?php echo site_url('accueil/redirectionForm') ?>" method="post" name="inscriptionForm" id="inscriptionForm">
            <fieldset >
                <legend>
                    <h2 class="">Description</h2>
                </legend>
                <div class="form-group col-xs-offset-2">
                    <label for="nom" class="control-label col-xs-2"> Questionnaire</label>
                    <div class="col-xs-7 input-group field_wrapper">
                        <!--<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>-->
                        <a href="javascript:void(0);" class="add_button" title="Add field"><span class="glyphicon glyphicon-plus"></span></a>
                        <input id="nom" type="text" name="question[]" class="form-control" placeholder="Votre question"/>
                    </div>
                </div>


                <div class="row col-xs-offset-4">
                    <div class="">
                        <div class="col-xs-5 col-xs-offset-1">
                            <button type="reset" class="btn btn-default">Annuler</button>
                        </div>
                    </div>
                    <div class="">
                        <div class="col-xs-3 ">
                            <button type="submit" class="btn btn-success">Continuer</button>

                        </div>
                    </div>
                </div>
            </fieldset>
        </form>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
    </div>







<?php

/**
 * @file
 * This template handles the layout of the views exposed filter form.
 *
 * Variables available:
 * - $widgets: An array of exposed form widgets. Each widget contains:
 * - $widget->label: The visible label to print. May be optional.
 * - $widget->operator: The operator for the widget. May be optional.
 * - $widget->widget: The widget itself.
 * - $sort_by: The select box to sort the view using an exposed form.
 * - $sort_order: The select box with the ASC, DESC options to define order. May be optional.
 * - $items_per_page: The select box with the available items per page. May be optional.
 * - $offset: A textfield to define the offset of the view. May be optional.
 * - $reset_button: A button to reset the exposed filter applied. May be optional.
 * - $button: The submit button for the form.
 *
 * @ingroup views_templates
 */
?>
<?php if (!empty($q)): ?>
  <?php
    // This ensures that, if clean URLs are off, the 'q' is added first so that
    // it shows up first in the URL.
    print $q;


    //Añadido por Keylor Mora para agrupar los campos del filtro expuesto de home - 16 junio 2015

    //Variable que guardarla el grupo de campos de tipo de experiencia
    $filtro_experiencia ="";
  ?>
<?php endif; ?>
<div class="views-exposed-form">
  <div class="views-exposed-widgets clearfix">
    <?php foreach ($widgets as $id => $widget): ?>
      
      <?php /* Añadido por Keylor Mora - Aquí se valida cual de los campos se esta procesando para saber si insertar los titulos */ ?>
      <?php if($id == "filter-field_tipo_de_atraccion_tid"){
        print "<div class='grupo-tipo-experiencia-filtro-home grupos-filtro-home'><h3>".t('What kind of expirience')." <span>".t('do you wish to have in Costa Rica?')."</span></h3>";
      }

      if ($id =="filter-field_disponibilidad_value"){
        print "<div class='grupo-fechas-filtro-home grupos-filtro-home'><h3><span>".t('Do you have')." </span>".t('Specific Dates?')."</h3><p>".t('You just have to indicate if you know the exact dates of your trip')."</p>";
      }?>


      <div id="<?php print $widget->id; ?>-wrapper" class="views-exposed-widget views-widget-<?php print $id; ?>">
        <?php if (!empty($widget->label)): ?>
          <label for="<?php print $widget->id; ?>">
            <?php print $widget->label; ?>
          </label>
        <?php endif; ?>
        <?php if (!empty($widget->operator)): ?>
          <div class="views-operator">
            <?php print $widget->operator; ?>
          </div>
        <?php endif; ?>
        <div class="views-widget">
          <?php print $widget->widget; ?>
        </div>
        <?php if (!empty($widget->description)): ?>
          <div class="description">
            <?php print $widget->description; ?>
          </div>
        <?php endif; ?>
      </div>

      <?php /* Añadido por Keylor - Aquí se inserta el cierre para los divs abiertos arriba que agrupan los campos*/ ?>
      <?php if($id == "filter-field_tipo_de_viaje_tid" || $id =="filter-field_disponibilidad_value2"){
        print "</div>";
      }?>


    <?php endforeach; ?>
    <?php if (!empty($sort_by)): ?>
      <div class="views-exposed-widget views-widget-sort-by">
        <?php print $sort_by; ?>
      </div>
      <div class="views-exposed-widget views-widget-sort-order">
        <?php print $sort_order; ?>
      </div>
    <?php endif; ?>
    <?php if (!empty($items_per_page)): ?>
      <div class="views-exposed-widget views-widget-per-page">
        <?php print $items_per_page; ?>
      </div>
    <?php endif; ?>
    <?php if (!empty($offset)): ?>
      <div class="views-exposed-widget views-widget-offset">
        <?php print $offset; ?>
      </div>
    <?php endif; ?>
    <div class="views-exposed-widget views-submit-button">
      <?php print $button; ?>
    </div>
    <?php if (!empty($reset_button)): ?>
      <div class="views-exposed-widget views-reset-button">
        <?php print $reset_button; ?>
      </div>
    <?php endif; ?>
  </div>
</div>

<?php

namespace Drupal\osm_fau;

use Drupal\geofield_map\LeafletTileLayerPluginBase;

/**
 * Provides an OpenStreetMap_Mapnik Leaflet TileLayer Plugin.
 *
 * @LeafletTileLayerPlugin(
 *   id = "OpenStreetMap_FAU",
 *   label = "OpenStreetMap FAU",
 *   url = "https://osm.rrze.fau.de/osmdehd/{Z}/{X}/{Y}.png",
 *   options = {
 *     "maxZoom" = 19,
 *     "attribution" = "&copy;
 * <a href='https://www.openstreetmap.org/copyright'>OpenStreetMap</a>"
 *   }
 * )
 */
class OpenStreetMapFAU extends LeafletTileLayerPluginBase {}

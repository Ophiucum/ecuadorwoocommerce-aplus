<?php
    /**
    * Plugin Name: EC WooComerce A+
    * Plugin URI: https://github.com/Ophiucum/ecuadorwoocommerce-aplus
    * Author: Ophiucum
    * Author URI: https://github.com/Ophiucum/
    * Description: Agrega zonas de envío clasificadas en subniveles
    * Version: 1.0
    * License: GPL2
    **/
//Add basic plugin security
defined( 'ABSPATH' ) or die;
    /**
 * My custom States of Ecuador
 */

//  Skip adding the function parameter...
function scpwoo_my_custom_states_of_Quito_and_Ecuador() {  

    // ...to begin customizing your data from scratch
    
    $states['EC']['EC1'] = 'Quito, 5 Esquinas';
    $states['EC']['EC2'] = 'Quito, Alangasí';
    $states['EC']['EC3'] = 'Quito, Amaguaña';
    $states['EC']['EC4'] = 'Quito, Atucucho';
    $states['EC']['EC5'] = 'Quito, Bellavista';
    $states['EC']['EC6'] = 'Quito, Calderón';
    $states['EC']['EC7'] = 'Quito, Carapungo';
    $states['EC']['EC8'] = 'Quito, Carcelén';
    $states['EC']['EC9'] = 'Quito, Caupichu';
    $states['EC']['EC10'] = 'Quito, Centro Histórico';
    $states['EC']['EC11'] = 'Quito, Chilibulo';
    $states['EC']['EC12'] = 'Quito, Chillogallo';
    $states['EC']['EC13'] = 'Quito, Chimbacalle';
    $states['EC']['EC14'] = 'Quito, Ciudadela del Ejercito';
    $states['EC']['EC15'] = 'Quito, Ciudadela Ibarra';
    $states['EC']['EC16'] = 'Quito, Comité del Pueblo';
    $states['EC']['EC17'] = 'Quito, Conocoto';
    $states['EC']['EC18'] = 'Quito, Cornejo';
    $states['EC']['EC19'] = 'Quito, Cotocollao';
    $states['EC']['EC20'] = 'Quito, Cumbayá';
    $states['EC']['EC21'] = 'Quito, El Batán';
    $states['EC']['EC22'] = 'Quito, El Beaterio';
    $states['EC']['EC23'] = 'Quito, El Bosque';
    $states['EC']['EC24'] = 'Quito, El Calzado';
    $states['EC']['EC25'] = 'Quito, El Camal';
    $states['EC']['EC26'] = 'Quito, El Condado';
    $states['EC']['EC27'] = 'Quito, El Dorado';
    $states['EC']['EC28'] = 'Quito, El Ejido';
    $states['EC']['EC29'] = 'Quito, El Inca';
    $states['EC']['EC30'] = 'Quito, El Panecillo';
    $states['EC']['EC31'] = 'Quito, El Pintado';
    $states['EC']['EC32'] = 'Quito, El Tejar';
    $states['EC']['EC33'] = 'Quito, El Tingo';
    $states['EC']['EC34'] = 'Quito, El Troje';
    $states['EC']['EC35'] = 'Quito, Guajaló';
    $states['EC']['EC36'] = 'Quito, Guamaní';
    $states['EC']['EC37'] = 'Quito, Guápulo';
    $states['EC']['EC38'] = 'Quito, Iñaquito';
    $states['EC']['EC39'] = 'Quito, Itchimbia';
    $states['EC']['EC40'] = 'Quito, Jardines del Batán';
    $states['EC']['EC41'] = 'Quito, La Argelia';
    $states['EC']['EC42'] = 'Quito, La Bota';
    $states['EC']['EC43'] = 'Quito, La Carolina';
    $states['EC']['EC44'] = 'Quito, La Ecuatoriana';
    $states['EC']['EC45'] = 'Quito, La Ferroviaria';
    $states['EC']['EC46'] = 'Quito, La Floresta';
    $states['EC']['EC47'] = 'Quito, La Florida';
    $states['EC']['EC48'] = 'Quito, La Forestal';
    $states['EC']['EC49'] = 'Quito, La Gatazo';
    $states['EC']['EC50'] = 'Quito, La Gazca';
    $states['EC']['EC51'] = 'Quito, La González Suárez';
    $states['EC']['EC52'] = 'Quito, La Granja';
    $states['EC']['EC53'] = 'Quito, La Guaragua';
    $states['EC']['EC54'] = 'Quito, La Kennedy';
    $states['EC']['EC55'] = 'Quito, La Libertad';
    $states['EC']['EC56'] = 'Quito, La Loma Grande';
    $states['EC']['EC57'] = 'Quito, La Luz';
    $states['EC']['EC58'] = 'Quito, La Magdalena';
    $states['EC']['EC59'] = 'Quito, La Marín';
    $states['EC']['EC60'] = 'Quito, La Mariscal';
    $states['EC']['EC61'] = 'Quito, La Mena 2';
    $states['EC']['EC62'] = 'Quito, La Merced';
    $states['EC']['EC63'] = 'Quito, La Ronda';
    $states['EC']['EC64'] = 'Quito, La Tola';
    $states['EC']['EC65'] = 'Quito, La Vicentina';
    $states['EC']['EC66'] = 'Quito, La Victoria';
    $states['EC']['EC67'] = 'Quito, Las Casas';
    $states['EC']['EC68'] = 'Quito, Loma de Puengasí';
    $states['EC']['EC69'] = 'Quito, Lucha de los Pobres';
    $states['EC']['EC70'] = 'Quito, Luluncoto';
    $states['EC']['EC71'] = 'Quito, Manuelita Saenz';
    $states['EC']['EC72'] = 'Quito, Mariana de Jesús';
    $states['EC']['EC73'] = 'Quito, Mena de Hierro';
    $states['EC']['EC74'] = 'Quito, Miraflores';
    $states['EC']['EC75'] = 'Quito, Monjas';
    $states['EC']['EC76'] = 'Quito, Monteserrín';
    $states['EC']['EC77'] = 'Quito, Nueva Aurora';
    $states['EC']['EC78'] = 'Quito, Oriente Quiteño';
    $states['EC']['EC79'] = 'Quito, Pifo';
    $states['EC']['EC80'] = 'Quito, Píntag y Tolóntag';
    $states['EC']['EC81'] = 'Quito, Pomasqui';
    $states['EC']['EC82'] = 'Quito, Ponceano';
    $states['EC']['EC83'] = 'Quito, Puembo';
    $states['EC']['EC84'] = 'Francisco de Orellana, Punto Servientrega';
    $states['EC']['EC85'] = 'Santa Elena, Punto Servientrega';
    $states['EC']['EC86'] = 'Machala, Punto Servientrega';
    $states['EC']['EC87'] = 'Quito, Quito Norte';
    $states['EC']['EC88'] = 'Quito, Quito Sur';
    $states['EC']['EC89'] = 'Quito, Quito Tennis';
    $states['EC']['EC90'] = 'Quito, Quitumbe';
    $states['EC']['EC91'] = 'Quito, Reino de Quito - La Mena';
    $states['EC']['EC92'] = 'Quito, Rumiñahui';
    $states['EC']['EC93'] = 'Quito, San Bartolo';
    $states['EC']['EC94'] = 'Quito, San Carlos';
    $states['EC']['EC95'] = 'Quito, San Diego';
    $states['EC']['EC96'] = 'Quito, San Juan';
    $states['EC']['EC97'] = 'Quito, San Marcos';
    $states['EC']['EC98'] = 'Quito, San Martín';
    $states['EC']['EC99'] = 'Rumiñahui, San Rafael';
    $states['EC']['EC100'] = 'Quito, San Roque';
    $states['EC']['EC101'] = 'Quito, Santa Rita';
    $states['EC']['EC102'] = 'Quito, Solanda';
    $states['EC']['EC103'] = 'Quito, Tababela';
    $states['EC']['EC104'] = 'Quito, Toctiuco';
    $states['EC']['EC105'] = 'Quito, Tumbaco';
    $states['EC']['EC106'] = 'Quito, Turubamba';
    $states['EC']['EC107'] = 'Quito, Villaflora';
    

    return $states['EC'];
  }
  // Fire our custom data in Provinces of Algeria dropdown
  add_filter('scpwoo_custom_states_ec', 'scpwoo_my_custom_states_of_Quito_and_Ecuador' );
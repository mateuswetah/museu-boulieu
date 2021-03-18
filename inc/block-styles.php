<?php
/**
 * Block Styles
 */
if ( function_exists( 'register_block_style' ) ) {
	/**
	 * Register block styles.
	 *
	 * @since 1.0.0
	 *
	 * @return void
	 */
	function museu_boulieu_block_styles() {
        register_block_style(            
            'core/columns',            
             array(                
               'name'  => 'column-museu-boulieu',                
               'label' =>  'Bordas entre colunas',    
               'isDefault' => true,        
            )        
        );
        register_block_style(            
            'core/group',            
             array(                
               'name'  => 'group-museu-boulieu',                
               'label' =>  'Bordas ao redor',   
               'isDefault' => true,  
            )        
        );
    }
    add_action( 'init', 'museu_boulieu_block_styles' );
}

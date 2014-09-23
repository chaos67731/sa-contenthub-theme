<?php 
    // Little function to return a custom field value
    function ISG_get_custom_field( $value ) {
        global $post;
        $custom_field = get_post_meta( $post->ID, $value, true );
        if ( !empty( $custom_field ) )
            return is_array( $custom_field ) ? esc_html( $custom_field ) : stripslashes( esc_html( $custom_field ) );
            return false;
    }

    // Register the Metabox
    function ISG_add_custom_meta_box() {
        add_meta_box( 'ISG-meta-box', __( 'Custom Content', 'textdomain' ), 'ISG_meta_box_output', 'post', 'normal', 'high' );
        add_meta_box( 'ISG-meta-box', __( 'Custom Content', 'textdomain' ), 'ISG_meta_box_output', 'page', 'normal', 'high' );
    }
    add_action( 'add_meta_boxes', 'ISG_add_custom_meta_box' );



    // Output the Metabox
    function ISG_meta_box_output( $post ) {
        // create a nonce field
        wp_nonce_field( 'my_ISG_meta_box_nonce', 'ISG_meta_box_nonce' ); ?>
        
        <p>
            <label for="custom_post_heading"><b>Custom Heading:</b><small>  no html</small></label><br />
            <input type="text" name="custom_post_heading" id="custom_post_heading" value="<?php echo ISG_get_custom_field( 'custom_post_heading' ); ?>" size="50" style="width:100%;"/>
        </p>
        
        <p>
            <label for="custome_post_summary"><b>Post Summary:</b><small>  no html</small></label><br />
            <textarea name="custome_post_summary" id="custome_post_summary" cols="60" rows="4" style="width:100%;"><?php echo ISG_get_custom_field( 'custome_post_summary' ); ?></textarea>
        </p>
        
        <?php
    }

     // Save the Metabox values
    function ISG_meta_box_save( $post_id ) {
        // Stop the script when doing autosave
        if( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;
     
        // Verify the nonce. If insn't there, stop the script
        if( !isset( $_POST['ISG_meta_box_nonce'] ) || !wp_verify_nonce( $_POST['ISG_meta_box_nonce'], 'my_ISG_meta_box_nonce' ) ) return;
     
        // Stop the script if the user does not have edit permissions
        if( !current_user_can( 'edit_post' ) ) return;
     
        // Save the textfield
        if( isset( $_POST['custom_post_heading'] ) )
            update_post_meta( $post_id, 'custom_post_heading', esc_attr( $_POST['custom_post_heading'] ) );
     
        // Save the textarea
        if( isset( $_POST['custome_post_summary'] ) )
            update_post_meta( $post_id, 'custome_post_summary', esc_attr( $_POST['custome_post_summary'] ) );
    }
    add_action( 'save_post', 'ISG_meta_box_save' );
?>
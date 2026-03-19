import { __ } from '@wordpress/i18n';
import { useBlockProps, RichText } from '@wordpress/block-editor';

import './editor.scss';

export default function Edit( { attributes, setAttributes } ) {
    const { title, subtitle } = attributes;

    return (
        <div { ...useBlockProps() }>
            <RichText
                tagName="h1"
                placeholder={ __( 'Title...', 'event-core-blocks' ) }
                value={ title }
                onChange={ ( val ) => setAttributes( { title: val } ) }
            />
            <RichText
                tagName="p"
                placeholder={ __( 'Subtitle...', 'event-core-blocks' ) }
                value={ subtitle }
                onChange={ ( val ) => setAttributes( { subtitle: val } ) }
            />
        </div>
    ); 
}


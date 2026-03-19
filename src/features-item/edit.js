import { useBlockProps, RichText } from '@wordpress/block-editor';
import { __ } from '@wordpress/i18n';

export default function Edit( { attributes, setAttributes } ) {
    const { title, description } = attributes;

    return (
        <div { ...useBlockProps( { className: 'feature-card' } ) }>
            <RichText
                tagName="h3"
                placeholder={ __( 'Заголовок...', 'event-core-blocks' ) }
                value={ title }
                onChange={ ( val ) => setAttributes( { title: val } ) }
            />
            <RichText
                tagName="p"
                placeholder={ __( 'Описание преимущества...', 'event-core-blocks' ) }
                value={ description }
                onChange={ ( val ) => setAttributes( { description: val } ) }
            />
        </div>
    );
}
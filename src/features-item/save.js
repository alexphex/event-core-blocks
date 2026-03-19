import { useBlockProps, RichText } from '@wordpress/block-editor';

export default function save( { attributes } ) {
    const { title, description } = attributes;

    return (
        <div { ...useBlockProps.save( { className: 'feature-card' } ) }>
            <RichText.Content tagName="h3" value={ title } />
            <RichText.Content tagName="p" value={ description } />
        </div>
    );
}
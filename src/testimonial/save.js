import { useBlockProps, RichText } from '@wordpress/block-editor';

export default function save( { attributes } ) {
    const { text, author, mediaUrl } = attributes;

    return (
        <div { ...useBlockProps.save( { className: 'testimonial-block' } ) }>
            { mediaUrl && (
                <img src={ mediaUrl } alt={ author } className="testimonial-photo" />
            ) }
            <RichText.Content tagName="blockquote" value={ text } />
            <RichText.Content tagName="cite" value={ author } />
        </div>
    );
}
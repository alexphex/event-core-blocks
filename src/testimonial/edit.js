import { useBlockProps, RichText, MediaUpload, MediaUploadCheck } from '@wordpress/block-editor';
import { __ } from '@wordpress/i18n';

export default function Edit( { attributes, setAttributes } ) {
    const { text, author, mediaUrl } = attributes;

    const onSelectMedia = ( media ) => {
        setAttributes( { mediaId: media.id, mediaUrl: media.url } );
    };

    return (
        <div { ...useBlockProps( { className: 'testimonial-block' } ) }>
            <div className="author-photo">
                <MediaUploadCheck>
                    <MediaUpload
                        onSelect={ onSelectMedia }
                        value={ attributes.mediaId }
                        render={ ( { open } ) => (
                            <img 
                                src={ mediaUrl } 
                                onClick={ open } 
                                style={ { cursor: 'pointer', borderRadius: '50%' } } 
                                width="80" 
                                height="80"
                            />
                        ) }
                    />
                </MediaUploadCheck>
            </div>
            
            <RichText
                tagName="blockquote"
                placeholder={ __( 'Testimonial text...', 'event-core-blocks' ) }
                value={ text }
                onChange={ ( val ) => setAttributes( { text: val } ) }
            />
            
            <RichText
                tagName="cite"
                placeholder={ __( 'Author name...', 'event-core-blocks' ) }
                value={ author }
                onChange={ ( val ) => setAttributes( { author: val } ) }
            />
        </div>
    );
}
import { useBlockProps, InnerBlocks } from '@wordpress/block-editor';
import './editor.scss';


export default function Edit() {
    // Определяем шаблон: 3 дочерних блока сразу
    const TEMPLATE = [
        [ 'event-core-blocks/features-item', { title: 'Преимущество 1' } ],
        [ 'event-core-blocks/features-item', { title: 'Преимущество 2' } ],
        [ 'event-core-blocks/features-item', { title: 'Преимущество 3' } ],
    ];

    return (
        <div { ...useBlockProps( { className: 'features-grid-container' } ) }>
            <InnerBlocks 
                allowedBlocks={ [ 'event-core-blocks/features-item' ] }
                template={ TEMPLATE }
                orientation="horizontal"
            />
        </div>
    );
}
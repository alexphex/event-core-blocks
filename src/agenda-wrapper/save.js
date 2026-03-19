import { useBlockProps, InnerBlocks } from '@wordpress/block-editor';

export default function Save() {
    // Получаем атрибуты блока (классы, стили и т.д.)
    const blockProps = useBlockProps.save();

    return (
        <div { ...blockProps }>
            {/* InnerBlocks.Content говорит WordPress: 
                "сохрани здесь всё содержимое, которое лежит внутри блока" */}
            <InnerBlocks.Content />
        </div>
    );
}
import { useBlockProps, InnerBlocks } from '@wordpress/block-editor';
import './editor.scss';

export default function Edit() {
    const blockProps = useBlockProps();

    return (
        <div { ...blockProps }>
            {/* Здесь теперь будет та самая зона для вставки других блоков */}
            <InnerBlocks />
        </div>
    );
}
import { useBlockProps, InnerBlocks } from '@wordpress/block-editor';
import './editor.scss';

export default function Edit() {
    const blockProps = useBlockProps();

    return (
        <div { ...blockProps }>
            {/* the area for inserting other blocks */}
            <InnerBlocks />
        </div>
    );
}
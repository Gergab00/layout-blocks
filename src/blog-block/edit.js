/**
 * Retrieves the translation of text.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/packages/packages-i18n/
 */
import { __ } from '@wordpress/i18n';

/**
 * React hook that is used to mark the block wrapper element.
 * It provides all the necessary props like the class name.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/packages/packages-block-editor/#useblockprops
 */
import { useBlockProps } from '@wordpress/block-editor';
import {
	Panel,
	PanelBody,
	__experimentalText as Text,
} from '@wordpress/components';
import FilterableList from './filterableList';

/**
 * Lets webpack process CSS, SASS or SCSS files referenced in JavaScript files.
 * Those files can contain any CSS code that gets applied to the editor.
 *
 * @see https://www.npmjs.com/package/@wordpress/scripts#using-css
 */
import './editor.scss';

/**
 * The edit function describes the structure of your block in the context of the
 * editor. This represents what the editor will render when the block is used.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/block-api/block-edit-save/#edit
 *
 * @return {WPElement} Element to render.
 */
export default function Edit( { attributes, setAttributes } ) {
	return (
		<div { ...useBlockProps() }>
			<Panel header="Blog Block">
				<PanelBody title="Select your category." initialOpen={ false }>
					<Text variant="title.small" as="h3">
						How to use?
					</Text>
					<Text variant="body">
						Select the category you want to appear in the block.
					</Text>
					<FilterableList
						setAttributes={ setAttributes }
						attributes
						value={ attributes.pages }
					/>
				</PanelBody>
			</Panel>
		</div>
	);
}

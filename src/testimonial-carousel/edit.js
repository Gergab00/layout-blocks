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
import { useBlockProps, RichText } from '@wordpress/block-editor';
import {
	Panel,
	PanelBody,
	__experimentalText as Text,
} from '@wordpress/components';

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
			<Panel header="Testimonial Carousel">
				<PanelBody title="How to use?" initialOpen={ true }>
					<Text variant="body">
						The testimonials that you add in the section with the
						same name will be displayed in this block. You can
						customize the title below.
					</Text>
				</PanelBody>
				<PanelBody title="Title" initialOpen={ false }>
					<RichText
						tagName="h2"
						value={ attributes.title }
						onChange={ ( newVal ) =>
							setAttributes( { title: newVal } )
						}
						placeholder="The Title Goes Here"
					/>
				</PanelBody>
			</Panel>
		</div>
	);
}

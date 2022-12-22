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
import { Panel, PanelBody, PanelRow, __experimentalGrid as Grid, __experimentalItem as Item, } from '@wordpress/components';

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
export default function Edit({ attributes, setAttributes }) {

	const bodyTitle = 'My Block Settings';
	const opened = true;

	return (
		<div {...useBlockProps()}>
			<Panel header="Letters Cards">
				<PanelBody title={bodyTitle} initialOpen={opened}>
					<PanelRow>
						<Grid columns={3}>
							<Item>
								<RichText
									tagName="h3"
									className="text-dark fs-24 fw-bold"
									value={attributes.title}
									onChange={(newVal) => {
										setAttributes({ title: newVal });
									}}
									placeholder="The Title goes here"
								/>
								<RichText
									tagName="p"
									className="text-black"
									value={attributes.text}
									onChange={(newVal) => {
										setAttributes({ text: newVal });
									}}
									placeholder="The Text goes here"
								/>
							</Item>
							<Item>
							<RichText
									tagName="h3"
									className="text-dark fs-24 fw-bold"
									value={attributes.title_2}
									onChange={(newVal) => {
										setAttributes({ title_2: newVal });
									}}
									placeholder="The Title goes here"
								/>
								<RichText
									tagName="p"
									className="text-black"
									value={attributes.text_2}
									onChange={(newVal) => {
										setAttributes({ text_2: newVal });
									}}
									placeholder="The Text goes here"
								/>
							</Item>
							<Item>
							<RichText
									tagName="h3"
									className="text-dark fs-24 fw-bold"
									value={attributes.title_3}
									onChange={(newVal) => {
										setAttributes({ title_3: newVal });
									}}
									placeholder="The Title goes here"
								/>
								<RichText
									tagName="p"
									className="text-black"
									value={attributes.text_3}
									onChange={(newVal) => {
										setAttributes({ text_3: newVal });
									}}
									placeholder="The Text goes here"
								/>
							</Item>
						</Grid>
					</PanelRow>
				</PanelBody>
			</Panel>
		</div>
	);
}

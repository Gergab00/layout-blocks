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

	const bodyTitle = 'Title and steps';
	const opened = true;

	return (
		<div {...useBlockProps()}>
			<Panel header="Process Section">
				<PanelBody title={bodyTitle} initialOpen={opened}>
					<PanelRow>
						<RichText
							tagName="h4"
							className="text-dark fs-16"
							value={attributes.title}
							onChange={(newVal) => {
								setAttributes({ title: newVal });
							}}
							placeholder="The Text of the Principal Title Goes Here"
						/>
					</PanelRow>
					<PanelRow>
						<Grid columns={2}>
							<Item>
								<RichText
									tagName="h4"
									className="text-dark fs-16"
									value={attributes.title_step_1}
									onChange={(newVal) => {
										setAttributes({ title_step_1: newVal });
									}}
									placeholder="The Text of the Title Goes Here"
								/>
								<RichText
									tagName="p"
									className="text-black fs-16"
									value={attributes.text_step_1}
									onChange={(newVal) => {
										setAttributes({ text_step_1: newVal });
									}}
									placeholder="The Text of the paragraph Goes Here"
								/>
							</Item>
							<Item>							<RichText
								tagName="h4"
								className="text-dark fs-16"
								value={attributes.title_step_2}
								onChange={(newVal) => {
									setAttributes({ title_step_2: newVal });
								}}
								placeholder="The Text of the Title Goes Here"
							/>
								<RichText
									tagName="p"
									className="text-black fs-16"
									value={attributes.text_step_2}
									onChange={(newVal) => {
										setAttributes({ text_step_2: newVal });
									}}
									placeholder="The Text of the paragraph Goes Here"
								/></Item>
							<Item>							<RichText
								tagName="h4"
								className="text-dark fs-16"
								value={attributes.title_step_3}
								onChange={(newVal) => {
									setAttributes({ title_step_3: newVal });
								}}
								placeholder="The Text of the Title Goes Here"
							/>
								<RichText
									tagName="p"
									className="text-black fs-16"
									value={attributes.text_step_3}
									onChange={(newVal) => {
										setAttributes({ text_step_3: newVal });
									}}
									placeholder="The Text of the paragraph Goes Here"
								/></Item>
							<Item>							<RichText
								tagName="h4"
								className="text-dark fs-16"
								value={attributes.title_step_4}
								onChange={(newVal) => {
									setAttributes({ title_step_4: newVal });
								}}
								placeholder="The Text of the Title Goes Here"
							/>
								<RichText
									tagName="p"
									className="text-black fs-16"
									value={attributes.text_step_4}
									onChange={(newVal) => {
										setAttributes({ text_step_4: newVal });
									}}
									placeholder="The Text of the paragraph Goes Here"
								/></Item>
						</Grid>
					</PanelRow>
				</PanelBody>
			</Panel>
		</div>
	);
}

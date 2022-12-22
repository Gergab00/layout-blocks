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
 import {
	useBlockProps,
	RichText,
	InnerBlocks,
	MediaUpload,
	__experimentalLinkControl as LinkControl
} from '@wordpress/block-editor';
import { Panel, PanelBody, PanelRow, Button, __experimentalGrid as Grid, __experimentalItem as Item, } from '@wordpress/components';

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

	const ALLOWED_MEDIA_TYPES = [ 'image' ];
	const ALLOWED_BLOCKS = [ 'core/paragraph', 'core/list', 'core/heading' ];
	const TEMPLATE = [ [ 'core/paragraph', {placeholder:"Put the text of the paragraph in here..."} ] ];
	const opened = true;

	return (
		<div {...useBlockProps()}>
			<Panel header="Icons With Text">
				<PanelBody title="Icons and paragraphs" initialOpen={opened}>
					<PanelRow>
						<Grid columns={2}>
							<Item>
								<MediaUpload
									onSelect={(icon) => {
										console.log('selected ' + icon.length);
										console.table(icon);
										setAttributes({
											icon,
										});
									}}
									allowedTypes={ALLOWED_MEDIA_TYPES}
									render={({ open }) => (
										<PanelRow className="media" initialOpen={false}>
											<Button onClick={open}>
												{typeof attributes.icon.url ==
													'undefined' ||
													attributes.icon.url == '' ? (
													'Open Media Library'
												) : (
													<img className="icon" src={attributes.icon.url} />
												)}
											</Button>
										</PanelRow>
									)}
								/>
								<RichText
									tagName="h4"
									className="text-dark fs-16"
									value={attributes.title}
									onChange={(newVal) => {
										setAttributes({ title: newVal });
									}}
									placeholder="The Text of the Title Goes Here"
								/>
								<RichText
									tagName="p"
									className="text-black fs-16"
									value={attributes.text}
									onChange={(newVal) => {
										setAttributes({ text: newVal });
									}}
									placeholder="The Text of the paragraph Goes Here"
								/>
							</Item>
							<Item>
							<MediaUpload
									onSelect={(icon_2) => {
										console.log('selected ' + icon_2.length);
										console.table(icon_2);
										setAttributes({
											icon_2,
										});
									}}
									allowedTypes={ALLOWED_MEDIA_TYPES}
									render={({ open }) => (
										<PanelRow className="media" initialOpen={false}>
											<Button onClick={open}>
												{typeof attributes.icon_2.url ==
													'undefined' ||
													attributes.icon_2.url == '' ? (
													'Open Media Library'
												) : (
													<img className="icon" src={attributes.icon_2.url} />
												)}
											</Button>
										</PanelRow>
									)}
								/>
								<RichText
									tagName="h4"
									className="text-dark fs-16"
									value={attributes.title_2}
									onChange={(newVal) => {
										setAttributes({ title_2: newVal });
									}}
									placeholder="The Text of the Title Goes Here"
								/>
								<RichText
									tagName="p"
									className="text-black fs-16"
									value={attributes.text_2}
									onChange={(newVal) => {
										setAttributes({ text_2: newVal });
									}}
									placeholder="The Text of the paragraph Goes Here"
								/>
							</Item>
							<Item>
							<MediaUpload
									onSelect={(icon_3) => {
										console.log('selected ' + icon_3.length);
										console.table(icon_3);
										setAttributes({
											icon_3,
										});
									}}
									allowedTypes={ALLOWED_MEDIA_TYPES}
									render={({ open }) => (
										<PanelRow className="media" initialOpen={false}>
											<Button onClick={open}>
												{typeof attributes.icon_3.url ==
													'undefined' ||
													attributes.icon_3.url == '' ? (
													'Open Media Library'
												) : (
													<img className="icon" src={attributes.icon_3.url} />
												)}
											</Button>
										</PanelRow>
									)}
								/>
								<RichText
									tagName="h4"
									className="text-dark fs-16"
									value={attributes.title_3}
									onChange={(newVal) => {
										setAttributes({ title_3: newVal });
									}}
									placeholder="The Text of the Title Goes Here"
								/>
								<RichText
									tagName="p"
									className="text-black fs-16"
									value={attributes.text_3}
									onChange={(newVal) => {
										setAttributes({ text_3: newVal });
									}}
									placeholder="The Text of the paragraph Goes Here"
								/>
							</Item>
							<Item>
							<MediaUpload
									onSelect={(icon_4) => {
										console.log('selected ' + icon_4.length);
										console.table(icon_4);
										setAttributes({
											icon_4,
										});
									}}
									allowedTypes={ALLOWED_MEDIA_TYPES}
									render={({ open }) => (
										<PanelRow className="media" initialOpen={false}>
											<Button onClick={open}>
												{typeof attributes.icon_4.url ==
													'undefined' ||
													attributes.icon_4.url == '' ? (
													'Open Media Library'
												) : (
													<img className="icon" src={attributes.icon_4.url} />
												)}
											</Button>
										</PanelRow>
									)}
								/>
								<RichText
									tagName="h4"
									className="text-dark fs-16"
									value={attributes.title_4}
									onChange={(newVal) => {
										setAttributes({ title_4: newVal });
									}}
									placeholder="The Text of the Title Goes Here"
								/>
								<RichText
									tagName="p"
									className="text-black fs-16"
									value={attributes.text_4}
									onChange={(newVal) => {
										setAttributes({ text_4: newVal });
									}}
									placeholder="The Text of the paragraph Goes Here"
								/>
							</Item>
						</Grid>
					</PanelRow>
					<PanelRow>
						<InnerBlocks
							allowedBlocks={ALLOWED_BLOCKS}
							template={TEMPLATE}
						/>
					</PanelRow>
				</PanelBody>
				<PanelBody title="Left Image" initialOpen={opened}>
					<PanelRow>
						<MediaUpload
							onSelect={(media) => {
								console.log('selected ' + media.length);
								console.table(media);
								setAttributes({
									media,
								});
							}}
							allowedTypes={ALLOWED_MEDIA_TYPES}
							render={({ open }) => (
								<PanelRow className="media" initialOpen={false}>
									<Button onClick={open}>
										{typeof attributes.media.url ==
											'undefined' ||
											attributes.media.url == '' ? (
											'Open Media Library'
										) : (
											<img className="left-img" src={attributes.media.url} />
										)}
									</Button>
								</PanelRow>
							)}
						/>
					</PanelRow>
				</PanelBody>
				<PanelBody title="Configure the button" initialOpen={opened}>
					<PanelRow>
					<RichText
							tagName="a"
							className="btn btn-outline-secondary rounded-0 fw-bold"
							value={ attributes.text_btn }
							onChange={ ( newVal ) => {
								setAttributes( { text_btn: newVal } );
							} }
							placeholder="The Text of the Button Goes Here"
						/>
						<LinkControl
							searchInputPlaceholder="Search here..."
							value={attributes.post}
							settings={[
								{
									id: 'opensInNewTab',
									title: 'Open in new tab',
								},
							]}
							onChange={(newPost) => {
								console.log(
									`The selected item URL: ${newPost.url}.`
								);
								setAttributes({
									post: newPost,
								});
							}}
							withCreateSuggestion={true}
							createSuggestion={(inputValue) =>
								setAttributes({
									post: {
										...attributes.post,
										title: inputValue,
										type: 'custom-url',
										id: Date.now(),
										url: inputValue,
									},
								})
							}
							createSuggestionButtonText={(newValue) =>
								`${__('New:')} ${newValue}`
							}
						></LinkControl>
					</PanelRow>
				</PanelBody>
			</Panel>
		</div>
	);
}

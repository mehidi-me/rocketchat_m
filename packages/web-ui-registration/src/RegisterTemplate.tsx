
import type { AllHTMLAttributes } from 'react';

import VerticalTemplate from './template/VerticalTemplate';

const RegisterTemplate = ({ children, ...props }: AllHTMLAttributes<HTMLElement>) => {
	const template = 'vertical-template';

	return (
		<main>
			{template === 'vertical-template' && <VerticalTemplate {...props} children={children} />}
			{/* {template === 'horizontal-template' && <HorizontalTemplate {...props} children={children} />} */}
		</main>
	);
};

export default RegisterTemplate;

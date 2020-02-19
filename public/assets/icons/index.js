import { getFilesList } from '%/utils/getFilesList';
export default getFilesList(require.context('./', true, /\.svg$/), 'svg');

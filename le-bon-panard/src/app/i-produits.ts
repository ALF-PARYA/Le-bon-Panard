import { IImage } from "./i-image";
import { IMatter } from "./i-matter";
import { ISize } from "./i-size";

export interface IProduits {

    id: number ;
    name: string;
    description: string ;
    price: number;
    socksize: ISize[];
    matters: IMatter[]; 
    images: IImage[];    
}
export { ISize };


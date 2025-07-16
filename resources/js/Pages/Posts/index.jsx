import DangerButton from "@/Components/DangerButton";
import Pagination from "@/Components/Pagination";
import PrimaryButton from "@/Components/PrimaryButton";
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout";

import { Head, Link, useForm } from '@inertiajs/react';

export default function index({posts:{data, links}}) {

    
    

    return (
        <AuthenticatedLayout>
            <Head title= "Posts"/>

            {/* <div className="py-12">
                <div className="mx-auto max-w-7xl space-y-6 sm:px-6 lg:px-8">

                    {
                        
                        data.map(post => {
                            return <div key={post.id} className="bg-white p-4 shadow sm:rounded-lg sm:p-8">
                                <h2 className="font-bold">{post.tittle}</h2>
                                <p>{post.body}</p>
                            </div>
                            
                        })
                    }
                </div>
            </div> */}

            
            <div className="py-11">
                <div className="mx-auto max-w-[1500px] space-y-6 sm:px-6 lg:px-8">
                    <div className="relative overflow-x-auto shadow-md sm:rounded-lg">
                        <table className="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                            <thead className="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" className="px-6 py-3">
                                        ID
                                    </th>
                                    <th scope="col" className="px-6 py-3">
                                        Titulo
                                    </th>
                                    <th scope="col" className="px-6 py-3">
                                        Cuerpo
                                    </th>
                                    <th scope="col" className="px-6 py-3">
                                        Editar
                                    </th>
                                    <th scope="col" className="px-6 py-3">
                                        Eliminar
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                {
                            
                                    data.map(post => {
                                        // return <div key={post.id} className="bg-white p-4 shadow sm:rounded-lg sm:p-8">
                                        //     <h2 className="font-bold">{post.tittle}</h2>
                                        //     <p>{post.body}</p>
                                        // </div>
                                        
                                        return <tr key={post.id} className="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700 border-gray-200">
                                            <th scope="row" className="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                {post.id}
                                            </th>
                                            <td className="px-6 py-4">
                                                {post.tittle}
                                            </td>
                                            <td className="px-6 py-4">
                                                {post.body}
                                            </td>
                                            <td className="px-6 py-4">
                                                <PrimaryButton>
                                                    Editar
                                                </PrimaryButton>
                                            </td>
                                            <td className="px-6 py-4">
                                                <DangerButton>
                                                    Eliminar
                                                </DangerButton>
                                            </td>
                                        </tr>
                                    })
                                }
                                
                            </tbody>
                        </table>
                    </div>

                    <Pagination className="mt-6" links={links} />
                </div>
            </div>

        </AuthenticatedLayout>
    );
}